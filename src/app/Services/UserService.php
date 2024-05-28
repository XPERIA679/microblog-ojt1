<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Collection;

class UserService
{
    /**
    * Search usernames that match the given query
    */
    public function searchUsernames(string $query): Collection
    {
        return User::where('username', 'like', '%' . $query . '%')->pluck('username');
    }
}
