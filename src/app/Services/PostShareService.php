<?php

namespace App\Services;

use App\Models\PostShare;
use App\Http\Requests\CreatePostShareRequest;

class PostShareService
{
    public function create(CreatePostShareRequest $request): void
    {
        PostShare::create([
            'user_id' => $request['user_id'],
            'post_id' => $request['post_id'],
            'repost_content' => $request['repost_content']
        ]); 
    }

    public function getAllPostShares()
    {
        return PostShare::all();
    }
}
