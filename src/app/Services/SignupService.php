<?php

namespace App\Services;

use App\Models\User;
use App\Models\Profile;

class SignupService
{
    /**
     * Registers a new user and creates an empty corresponding profile
     */
    public function register(array $data): string
    {
        unset($data["password_confirmation"]);

        $user = User::create([
            'status' => 0,
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email']
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);

        $user->sendEmailVerificationNotification();
        
        return $user->email;
    }

    /**
     * Mark the user as verified after clicking 'verify button'.
     */
    public function verifyEmail(string $id, string $hash): string
    {
        $user = User::find($id);
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return '/';
    }

    /**
     * Sends a verification email to user's email.
     * Determines whether the user will be redirected to sign-in or resend email page.
     */
    public function sendVerificationNotification(string $email): bool
    {
        $user = User::where('email', $email)->first();
        $user->sendEmailVerificationNotification();
        
        return $user->hasVerifiedEmail();
    }
}
