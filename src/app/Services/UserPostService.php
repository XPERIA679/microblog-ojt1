<?php

namespace App\Services;

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

    public function getAllPostsAndMedia()
    {
        $userPosts = UserPost::all();
        $postMedia = PostMedia::all();
        $postsAndMedia = [];

        foreach ($userPosts as $post) {
            // Check if the post has associated media
            $postMedium = $postMedia->where('post_id', $post->id)->first();
            
            if ($postMedium) { // Check if media exists for this post
                // If media exists for this post, add both post and media to the array
                $postsAndMedia[] = [
                    'post' => $post,
                    'postMedium' => $postMedium
                ];
            } else {
                // If no media exists for this post, add only the post to the array
                $postsAndMedia[] = [
                    'post' => $post,
                    'postMedium' => null
                ];
            }
        }
        return $postsAndMedia; // Convert array to Collection and return
    }


}
