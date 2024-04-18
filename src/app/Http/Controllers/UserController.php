<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    /**
     * Register a new user.
     */
        public function register(RegisterRequest $request): View
    {
        $requestData = $request->all();
        unset($requestData["password_confirmation"]);

        $user = User::create([
            'status' => 0,
            'username' => $requestData['username'],
            'password' => $requestData['password'], 
            'email' => $requestData['email']
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);
        
        auth()->login($user);
        $user->sendEmailVerificationNotification();

        return view('components.auth.verify-email');
    }
    
    /**
     * Logout currently logged in user.
     */
    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * Mark the user as verified after clicking 'verify button'.
     */
    public function verifyEmail($id, $hash): View
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
            return view('verification-sucess');
        } else {
            return view('verification-failed');
        }
    }

    /**
     * Send a verification email to user's email address.
     */
    public function sendVerificationNotification(Request $request): View
    {
        if ($request->user()->hasVerifiedEmail()) {
            return view('test-login');
        }
        $request->user()->sendEmailVerificationNotification();

        return view('components.auth.verify-email');
    }
}
