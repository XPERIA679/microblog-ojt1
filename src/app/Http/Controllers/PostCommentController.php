<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCommentRequest;
use App\Services\PostCommentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\PostComment; // Ensure this is imported
use App\Models\PostShare; // Ensure this is imported

class PostCommentController extends Controller
{
    protected $postCommentService;

    public function __construct(PostCommentService $postCommentService)
    {
        $this->postCommentService = $postCommentService;
    }
    /**
     * Calls service to create a new comment.
     */
    public function create(PostCommentRequest $request):RedirectResponse
    {
        $this->postCommentService->create($request);
        return redirect('/posts-page');
    }

    /**
     * Calls service to update comment.
     */
    public function update(PostCommentRequest $request):RedirectResponse
    {
        $this->postCommentService->update($request);
        return redirect('/posts-page');
    }

    /**
     * Calls service to delete a  comment.
     */
    public function delete($id)
    {
        $this->postCommentService->delete($id);
        return redirect()->back();
    }
}
