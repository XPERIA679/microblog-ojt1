<?php

namespace App\Services;

use App\Models\UserPost;
use App\Models\PostMedia;
use App\Http\Requests\CreateUserPostRequest;

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
}
