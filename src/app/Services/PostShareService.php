<?php

namespace App\Services;

use App\Models\PostShare;
use App\Http\Requests\CreatePostShareRequest;
use App\Http\Requests\EditPostShareRequest;

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
     * Edits a shared post
     */
    public function editShare(EditPostShareRequest $request): void
    {
        PostShare::findOrFail($request->postToEditId)->update(['repost_content' => $request->editedContent]);
    }
    
    /**
     * Deletes a shared post
     */
    public function delete(int $postShareId): void
    {
        PostShare::destroy($postShareId);
    }
}
