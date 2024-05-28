<?php

namespace App\Services;

use App\Services\SignupService;

class SigninService
{
    public $signupService;

    public function __construct(SignupService $signupService)
    {
        $this->signupService = $signupService;
    }

    /**
     * Verify user credentials and log them in.
     * If the user is not yet verified, redirect to resend verification page
     */
    public function handleLogin(array $credentials): mixed
    {
        if (!auth()->attempt($credentials)) {
            return redirect('/signin')->withErrors(['failed' => 'Wrong username or password']);
        }
    
        $user = auth()->user();
    
        if ($user->hasVerifiedEmail()) {
            return redirect('/posts-page');
        }
    
        $this->signupService->sendVerificationNotification($user->email);
        auth()->logout();
    
        return redirect('/verification-page/' . $user->email);
    }    

    /**
     * Logout currently logged in user.
     */
    public function logout()
    {
        auth()->logout();
    }

}
