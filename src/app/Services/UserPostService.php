<?php

namespace App\Services;

use App\Models\PostLike;
use App\Models\UserPost;
use App\Models\PostMedia;
use App\Services\PostShareService;
use App\Http\Requests\EditUserPostRequest;
use App\Http\Requests\CreateUserPostRequest;
use Illuminate\Support\Collection; 
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
        UserPost::findOrFail($request->userPostToEditId)->update(['content' => $request->editedContent]);

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
     * Gets all the user posts, posts media
     * Combine the all posts and their media into array<UserPost, PostMedia>
     * Combine array<UserPost, PostMedia> with all PostShares 
     * Sort the Collection of array<UserPost, PostMedia> and PostShares by date
     */
    public function getAllPostsAndMediaAndShares(): Collection
    {
        $userPosts = UserPost::all();
        $postsMedia = PostMedia::all();
        $postsAndMedia = [];

        foreach ($userPosts as $post) {
            $postMedium = $postsMedia->where('post_id', $post->id)->first();
            $postsAndMedia[] = [
                'post' => $post,
                'postMedium' => $postMedium ?? null
            ];
        }
        $postsMediaAndShares = collect($postsAndMedia)->merge($this->postShareService->getAllPostShares());
        
        $postsMediaAndShares = $postsMediaAndShares->sortBy(function ($item) {
        if ($item instanceof \App\Models\PostShare) {
                return $item->updated_at;
            }
            return $item['post']->updated_at;
        });

        return $postsMediaAndShares ;
    }

    /**
     * Delete a user post.
     */
    public function delete(int $userPostToDeleteId): void 
    {
        UserPost::destroy($userPostToDeleteId);
    }

    /**
     * Creates a new like record if no record exists.
     * Restores a like record if soft deleted.
     */
    public function likePost(int $userPostToLikeId): void
    {
        $postLike = PostLike::withTrashed()
                    ->where('post_id', $userPostToLikeId)
                    ->where('user_id', auth()->id())
                    ->first();

        if ($postLike) {
            $postLike->restore();
        } else {
            PostLike::create([
                'post_id' => $userPostToLikeId,
                'user_id' => auth()->id()
            ]);
        }
    }

    /**
     * Remove a like record with softdelete
     */
    public function unlikePost(int $userPostToUnlikeId): void
    {
        $postLike = PostLike::where('user_id', auth()->id())
                    ->where('post_id', $userPostToUnlikeId)
                    ->first()->id;
        PostLike::destroy($postLike);
    }

    /**
     * Get all the post likes records.
     */
    public function getAllPostLikes()
    {
        return PostLike::all()->toArray();
    }
}
