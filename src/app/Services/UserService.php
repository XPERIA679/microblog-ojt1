<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function searchUsernames(string $query)
    {
        return User::where('username', 'like', '%' . $query . '%')->pluck('username');
    }
}
