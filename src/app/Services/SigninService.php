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
    public function login(array $credentials): array
    {
        $signinData = ['view' => 'components.feeds.newsfeeds', 'userEmail' => null];

        if (auth()->attempt($credentials)) {
            if (auth()->user()->hasVerifiedEmail()) {
                return $signinData;
            }

            $signinData['view'] = 'components.auth.verify-email';
            $signinData['userEmail'] = auth()->user()->email;

            $this->signupService->sendVerificationNotification($signinData['userEmail']);
            auth()->logout();
        }

        return $signinData;
    }

    /**
     * Logout currently logged in user.
     */
    public function logout()
    {
        auth()->logout();
    }

}
