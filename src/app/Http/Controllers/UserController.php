<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    public function register(RegisterRequest $request) 
    {
        $requestData = $request->all();
        unset($requestData["password_confirmation"]);

        $user = User::create([
            'status' => 0,
            'username' => $requestData['username'],
            'password' => $requestData['password'], 
            'email' => $requestData['email']
        ]);

        auth()->login($user);
        $user->sendEmailVerificationNotification();

        return view('components.auth.verify-email');
    }
    
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function verifyEmail($id, $hash)
    {
        Log::info('Verification request parameters:', [
            'id' => $id,
            'hash' => $hash,
        ]);

        $user = User::find($id);

        if ($user) {
            if (!$user->hasVerifiedEmail()) {
                $user->markEmailAsVerified();
            }
            return view('test-login');
        } else {
            Log::error('User not found');
        }
    }

    public function sendVerificationNotification(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return view('test-login');
        }
        $request->user()->sendEmailVerificationNotification();

        return view('components.auth.verify-email');
    }
}
