<?php

namespace App\Http\Controllers;

use App\Services\UserPostService;
use App\Http\Requests\CreateUserPostRequest;
use Illuminate\Http\RedirectResponse;

class UserPostController extends Controller
{   
    public $userPostService;

    public function __construct() {
        $this->userPostService = new UserPostService;
    }

    /**
     * Create a new post for the user.
     */
    public function create(CreateUserPostRequest $request): RedirectResponse 
    {
        $this->userPostService->create($request->all());
        return redirect('/');
    }
}
