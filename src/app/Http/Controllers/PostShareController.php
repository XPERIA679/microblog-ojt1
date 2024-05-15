<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostShareService;
use App\Http\Requests\CreatePostShareRequest;


class PostShareController extends Controller
{   
    public $postShareService;

    public function __construct() {
        $this->postShareService = new PostShareService;
    }

    /**
     * Calls service to create new shared post.
     */
    public function create(CreatePostShareRequest $request): void
    {
        $this->postShareService->create($request);
    }
    
    /**
     * Calls service to delete a shared post.
     */
    public function delete(Request $request): void
    {
        $this->postShareService->delete($request->postShareId);
    }
}
