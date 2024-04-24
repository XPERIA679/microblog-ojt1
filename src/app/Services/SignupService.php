<?php

namespace App\Services;

use App\Models\User;
use App\Models\Profile;

class SignupService
{
    public function registerUser(array $data): User
    {
        $user = User::create([
            'status' => 0,
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email']
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);

        return $user;
    }
}
