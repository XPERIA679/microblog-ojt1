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

        $user = User::create([
            'username' => $request['username'],
            'password' => $request['password'], 
            'email' => $request['email']
        ]);

        Profile::create([
            'user_id' => $user->id,
            'first_name' => ucwords($request['first_name']),
            'last_name' => ucwords($request['last_name']),
            'contact' => $request['contact'],
            'birth_date' => $request['birth_date'],
            'address' => ucwords($request['address'] . " " .
                $request['city'] . " " .
                $request['state_province'] . " " .
                $request['postal_code'] . " " .
                $request['country']),
        ]);
        
        return redirect('/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
