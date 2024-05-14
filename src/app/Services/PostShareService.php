<?php

namespace App\Services;

use App\Models\PostShare;
use Illuminate\Database\Eloquent\Collection;
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
     * Gets all shared posts.
     */
    public function getAllPostShares(): Collection
    {
        return PostShare::all();
    }
}
