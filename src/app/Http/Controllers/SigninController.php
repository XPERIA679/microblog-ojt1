<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\SigninRequest;
use Illuminate\Http\RedirectResponse;

class SigninController extends Controller
{
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
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/signin');
        }

        return redirect()->back()->withErrors(['message' => 'Invalid username or password.']);
    }

    /**
     * Logout currently logged in user.
     */
    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect('/signin');
    }
}
