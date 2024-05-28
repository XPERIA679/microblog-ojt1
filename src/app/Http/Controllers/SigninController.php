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
    public $userPostService;
    public $postShareService;

    public function __construct(SigninService $signinService)
    {
        $this->signinService = $signinService;
        $this->userPostService = new UserPostService;
        $this->postShareService = new PostShareService;
    }

    /**
     * Return view user to sign in page.
     */
    public function showSignin(): View
    {
        return view('components.forms.signin');
    }

    /**
     * Verify user credentials and log them in.
     */
    public function login(SigninRequest $request): RedirectResponse
    {
        return $this->signinService->handleLogin($request->only('username', 'password'));
    }

    /**
     * Logout currently logged in user.
     */
    public function logout(): RedirectResponse
    {
        $this->signinService->logout();
        return redirect('/signin');
    }
}
