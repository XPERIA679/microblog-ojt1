<?php

namespace App\Services;

use App\Services\SignupService;
use App\Http\Requests\SigninRequest;

class SigninService
{
    /**
     * Verify user credentials and log them in.
     * If the user is not yet verified, redirect to resend verification page
     */
    public function login(SigninRequest $request): array
    {
        $credentials = $request->only('username', 'password');
        $signinData = ['view' => 'components.forms.signin', 'userEmail' => null];

        if (auth()->attempt($credentials)) {
            if (auth()->user()->hasVerifiedEmail()) {
                return $signinData;
            } 

            $signinData['view'] = 'components.auth.verify-email';
            $signinData['userEmail'] = auth()->user()->email;

            (new SignupService)->sendVerificationNotification($signinData['userEmail']);
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
