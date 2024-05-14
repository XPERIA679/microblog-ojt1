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

    public function create(CreatePostShareRequest $request): void
    {
        $this->postShareService->create($request);
    }    
}
