<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCommentRequest;
use App\Models\PostComment; // Ensure this is imported
use App\Models\PostShare; // Ensure this is imported
use App\Services\PostCommentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class PostCommentController extends Controller
{
    protected $postCommentService;

    public function __construct(PostCommentService $postCommentService)
    {
        $this->postCommentService = $postCommentService;
    }

    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $this->postCommentService->create($request);
        return redirect()->back();
    }

    public function delete(Request $request): RedirectResponse
    {
        $this->postCommentService->delete($request->postCommentToDeleteId);
        return redirect()->back();
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $this->postCommentService->update($request, $id);
        return redirect()->back();
    }
}
