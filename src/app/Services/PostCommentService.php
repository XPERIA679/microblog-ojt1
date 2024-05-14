<?php

namespace App\Services;

use App\Models\PostComment;
use App\Http\Requests\PostCommentRequest;

class PostCommentService
{
    /**
     * Creates a new comment for the post.
     */
    public function create(PostCommentRequest $request): void
    {
        PostComment::create([
            'post_id' => $request['post_id'],
            'user_id' => auth()->id(),
            'content' => $request['content']
        ]);
    }

    /**
     * Edits comment for the post.
     */
    public function update(PostCommentRequest $request): void
    {
        PostComment::findOrFail($request->postCommentToEditId)->update(['content' => $request->content]);
    }

    /**
     * Deletes a comment.
     */
    public function delete(int $PostCommentToDeleteId): void 
    {
        PostComment::destroy($PostCommentToDeleteId);
    }
}
