<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{

    /**
     * Return view user to sign up page.
     */
    public function showSignup(): view
    {
        return view('auth.signup');
    }


    /**
     * Register a new user.
     */
    public function register(SignupRequest $request)
    {
        $requestData = $request->all();

        unset($requestData["password_confirmation"]);
        //$debugData = DD($requestData);
        $user = User::create([
            'status' => 0,
            'username' => $requestData['username'],
            'password' => $requestData['password'],
            'email' => $requestData['email']
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);

        $user->sendEmailVerificationNotification();

        return view('auth.verify-email');
    }

    /**
     * Logout currently logged in user.
     */
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    /**
     * Mark the user as verified after clicking 'verify button'.
     */
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
            return view('auth.signin');
        } else {
            Log::error('User not found');
        }
    }

    /**
     * Send a verification email to user's email address.
     */
    public function sendVerificationNotification(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return view('auth.signin');
        }
        $request->user()->sendEmailVerificationNotification();

        return view('components.auth.verify-email');
    }
}
