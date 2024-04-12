<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function register(RegisterRequest $request) 
    {   

        $request = $request->all();
        unset($request["password_confirmation"]);

        User::create([
            'status' => 0,
            'username' => $request['username'],
            'password' => $request['password'], 
            'email' => $request['email']
        ]);

        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
