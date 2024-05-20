<?php

namespace App\Http\Controllers;

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
}
