<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostShareService;
use App\Http\Requests\CreatePostShareRequest;
use Illuminate\Http\RedirectResponse;

class PostShareController extends Controller
{
    public $postShareService;

    public function __construct() {
        $this->postShareService = new PostShareService;
    }

    /**
     * Calls service to create new shared post and redirect back to posts page.
     */
    public function create(CreatePostShareRequest $request): RedirectResponse
    {
        $this->postShareService->create($request);

        return redirect('/posts-page');
    }

    /**
     * Calls service to delete a shared post.
     */
    public function delete(Request $request): void
    {
        $this->postShareService->delete($request->postShareToDeleteId);
    }
}
