<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostCommentService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PostCommentRequest;

class PostCommentController extends Controller
{   
    public $postCommentService;

    public function __construct()
    {
        $this->postCommentService = new PostCommentService();
    }

    /**
     * Calls service to create a new comment.
     */
    public function create(PostCommentRequest $request):RedirectResponse
    {
        $this->postCommentService->create($request);
        return redirect('/posts-page')->with('notifMessage', 'Comment Created Successfully!');
    }

    /**
     * Calls service to update comment.
     */
    public function update(PostCommentRequest $request):RedirectResponse
    {   
        $this->postCommentService->update($request);
        return redirect('/posts-page')->with('notifMessage', 'Comment Updated Successfully!');
    }

    /**
     * Calls service to delete a  comment.
     */
    public function delete(Request $request):RedirectResponse
    {
        $this->postCommentService->delete($request->postCommentToDeleteId);
        return redirect('/posts-page')->with('notifMessage', 'Comment Deleted Successfully!');
    }
}
