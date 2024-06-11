<?php

namespace App\Services;

use App\Models\PostShare;
use App\Http\Requests\CreatePostShareRequest;

class PostShareService
{
    /**
     * Creates a new shared post
     */
    public function create(CreatePostShareRequest $request): void
    {
        PostShare::create([
            'user_id' => $request['user_id'],
            'post_id' => $request['post_id'],
            'repost_content' => $request['repost_content']
        ]); 
    }

    /**
     * Deletes a shared post
     */
    public function delete(int $postShareId): void
    {
        PostShare::destroy($postShareId);
    }
}
