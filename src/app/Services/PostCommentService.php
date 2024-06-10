<?php

namespace App\Services;

use App\Http\Requests\PostCommentRequest;
use App\Models\PostComment;
use Illuminate\Http\Request;

class PostCommentService
{
    public function create(Request $request): void
    {
        $idToInsertInto = $request->has('post_id') ? 'post_id' : 'post_share_id';
        PostComment::create([
            $idToInsertInto => $request[$idToInsertInto],
            'user_id' => auth()->id(),
            'content' => $request['content']
        ]);
    }

    public function delete(int $postCommentToDeleteId): void
    {
        PostComment::destroy($postCommentToDeleteId);
    }

    public function update(Request $request, int $id): void
    {
        $comment = PostComment::findOrFail($id);
        $comment->update(['content' => $request->content]);
    }
}
