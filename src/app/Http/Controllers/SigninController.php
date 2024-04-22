<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\SigninRequest;

class SigninController extends Controller
{
    /**
     * Return view user to sign in page.
     */
    public function showSignin(): view
    {
        return view('auth.signin');
    }

    /**
     * Verify user credentials and log them in.
     */
    public function login(SigninRequest $request)
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
    public function logout()
    {
        auth()->logout();
        return redirect('/signin');
    }
}
