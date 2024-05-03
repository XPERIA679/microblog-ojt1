<?php

namespace App\Services;

use App\Http\Requests\EditUserPostRequest;
use App\Models\UserPost;
use App\Models\PostMedia;
use App\Http\Requests\CreateUserPostRequest;
use Illuminate\Support\Collection;

class UserPostService
{
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
        $postToEdit = UserPost::findOrFail($request->userPostToEditId);
        $postToEdit->update(['content' => $request->editedContent]);

        if($request->shouldRemoveImage){
            PostMedia::find($request->postMediaToEditId)->delete();
        }

        if ($request->hasFile('editedImage')) {
            $file = $request->file('editedImage');
            $extension = $file->getClientOriginalExtension(); 
            $filename = time() . '.' . $extension;
            $path = 'uploads/images/';
            $file->move($path, $filename);

            PostMedia::updateOrCreate(
                ['post_id' => $postToEdit->id],
                ['image' => $path . $filename]
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
     * Gets all the posts and media from database
     */
    public function getAllPostsAndMedia(): array
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

        return $postsAndMedia;
    }
}
