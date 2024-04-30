<?php

namespace App\Services;

use App\Models\UserPost;

class UserPostService
{
    /**
    * create a new user post
    */
    public function create(array $data)
    {
        $userPost = UserPost::create([
            'user_id' => $data['user_id'],
            'content' => $data['content']
        ]); 

        //For future use
        // PostMedia::create([
        //     'post_id' = $userPost->id;
        //     ...
        //     ...
        // ]);
    }
}
