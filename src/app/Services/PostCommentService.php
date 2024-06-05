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
        $idToInsertInto = $request->has('post_id') ? 'post_id' : 'post_share_id';
        PostComment::create([
            $idToInsertInto => $request[$idToInsertInto],
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
    public function delete(int $postCommentToDeleteId): void 
    {
        PostComment::destroy($postCommentToDeleteId);
    }
}
