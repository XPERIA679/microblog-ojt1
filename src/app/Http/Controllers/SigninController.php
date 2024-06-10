<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Services\SigninService;
use App\Services\UserPostService;
use App\Services\PostShareService;
use App\Http\Requests\SigninRequest;
use Illuminate\Http\RedirectResponse;

class SigninController extends Controller
{
    protected $signinService;
    protected $userPostService;
    protected $postShareService;

    public function __construct(
        SigninService $signinService,
        UserPostService $userPostService,
        PostShareService $postShareService
    ) {
        $this->signinService = $signinService;
        $this->userPostService = $userPostService;
        $this->postShareService = $postShareService;
    }

    /**
     * Verify user credentials and log them in.
     */
    public function login(SigninRequest $request): RedirectResponse
    {
        return $this->signinService->handleLogin(['username' => $request['loginUsername'], 'password' => $request['loginPassword']]);
    }

    /**
     * Logout currently logged in user.
     */
    public function logout(): RedirectResponse
    {
        $this->signinService->logout();
        return redirect('/');
    }
}
