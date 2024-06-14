<?php

namespace App\Services;

use App\Models\PostLike;
use App\Models\UserPost;
use App\Models\PostMedia;
use App\Models\PostShare;
use App\Services\PostShareService;
use Illuminate\Support\Collection;
use App\Http\Requests\EditUserPostRequest;
use App\Http\Requests\EditPostShareRequest;
use App\Http\Requests\CreateUserPostRequest;
use Illuminate\Pagination\LengthAwarePaginator;

class UserPostService
{
    protected $postShareService;

    public function __construct()
    {
        $this->postShareService = new PostShareService;
    }

    /**
    * create a new user post
    */
    public function create(CreateUserPostRequest $request): void
    {
        $userPost = UserPost::create([
            'user_id' => $request['user_id'],
            'content' => $request['content']
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/images/';
            $file->move($path, $filename);

            PostMedia::create([
                'image' => $path . $filename,
                'post_id' => $userPost->id,
            ]);
        }
    }

    /**
    * Edit a new user post
    */
    public function edit(EditUserPostRequest $request): void
    {
        UserPost::findOrFail($request->postToEditId)->update(['content' => $request->editedContent]);

        if ($request->shouldRemoveImage) {
            PostMedia::destroy($request->postMediaToEditId);
        }

        if ($request->hasFile('editedImage')) {
            $filename = time() . '.' . $request->file('editedImage')->getClientOriginalExtension();
            $request->file('editedImage')->move('uploads/images/', $filename);

            PostMedia::updateOrCreate(
                ['post_id' => $request->userPostToEditId],
                ['image' => 'uploads/images/' . $filename]
            );
        }
    }

    /**
     * Get the specific post and media based from the id of post.
     */
    public function getUserPostAndMediaToEdit(int $post_id): Array
    {
        $userPostToEdit = UserPost::where('id', $post_id)->firstOrFail();

        $postsMediaIds = PostMedia::all()->pluck('post_id')->toArray();
        if(in_array($post_id, $postsMediaIds)) {
            $postMediaToEdit = PostMedia::where('post_id', $post_id)->firstOrFail();
            return [
                'userPostToEdit' => $userPostToEdit,
                'postMediaToEdit' => $postMediaToEdit
            ];
        }

        return [
            'userPostToEdit' => $userPostToEdit,
            'postMediaToEdit' => null
        ];
    }

    /**
     * Retrieves and combines user posts with media and shares, then sorts by date.
     * */
    public function getAllPostsAndMediaAndShares(): LengthAwarePaginator
    {
        $followedUserIds = auth()->user()->followings()->where('status', 1)->pluck('following_id')->toArray();
        $followedUserIds[] = auth()->user()->id;

        $userPosts = UserPost::whereIn('user_id', $followedUserIds)->get();
        $postsMedia = PostMedia::all();
        $postsAndMedia = [];

        foreach ($userPosts as $post) {
            $postMedium = $postsMedia->where('post_id', $post->id)->first();
            $postsAndMedia[] = [
                'post' => $post,
                'postMedium' => $postMedium ?? null
            ];
        }
        $postsMediaAndShares = collect($postsAndMedia)->merge(PostShare::with('post')->get());

        $postsMediaAndShares = $postsMediaAndShares->sortByDesc(function ($item) {
        if ($item instanceof PostShare) {
                return $item->updated_at;
            }
            return $item['post']->updated_at;
        });

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 4;
        $currentItems = $postsMediaAndShares->slice(($currentPage - 1) * $perPage, $perPage)->all();

        return new LengthAwarePaginator(
            $currentItems,
            $postsMediaAndShares->count(),
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );
    }


    /**
     * Delete a user post.
     */
    public function delete(int $userPostToDeleteId, string $type): void
    {
        $type === 'sharedPost'
        ? PostShare::destroy($userPostToDeleteId)
        : UserPost::destroy($userPostToDeleteId);
    }

    /**
     * Determines if post to 'like' is original or shared.
     * Creates a 'like' record if existing or restore if soft deleted.
     */
    public function likePost(array $data): void
    {
        $idToInsertInto = ($data['type'] === 'originalPost') ? 'post_id' : 'post_share_id';
        PostLike::withTrashed()->firstOrCreate([
            $idToInsertInto => $data['id'],
            'user_id' => auth()->id()
        ])->restore();
    }

    /**
     * Determines if the post to unlike is original or shared.
     * Deletes the 'like' record.
     */
    public function unlikePost(array $data): void
    {
        $idToQuery = ($data['type'] === 'originalPost') ? 'post_id' : 'post_share_id';
        PostLike::where('user_id', auth()->id())->where($idToQuery, $data['id'])->first()->delete();
    }
}
