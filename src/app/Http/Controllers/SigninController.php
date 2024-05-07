<?php

namespace App\Http\Controllers;

use App\Services\SigninService;
use Illuminate\View\View;
use App\Http\Requests\SigninRequest;
use Illuminate\Http\RedirectResponse;

class SigninController extends Controller
{
    protected $signinService;

    public function __construct(SigninService $signinService)
    {
        $this->signinService = $signinService;
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
    public function login(SigninRequest $request): View
    {
        $signinData = $this->signinService->login($request->only('username', 'password'));
        return view($signinData['view'], ['userEmail' => $signinData['userEmail']]);
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
