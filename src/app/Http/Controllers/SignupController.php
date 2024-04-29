<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SignupRequest;
use App\Services\SignupService;

class SignupController extends Controller
{

    protected $signupService;

    /**
     * Constructor for the SignupController.
     *
     * @param SignupService $userService The service responsible for user-related operations.
     */
    public function __construct(SignupService $signupService)
    {
        $this->signupService = $signupService;
    }

    /**
     * Return view user to sign up page.
     */
    public function showSignup(): view
    {
        return view('components.forms.signup');
    }


    /**
     * Register a new user.
     */
    public function register(SignupRequest $request): View
    {
        $requestData = $request->all();
        unset($requestData["password_confirmation"]);

        $user = $this->signupService->registerUser($requestData);

        $user->sendEmailVerificationNotification();

        return view('components.auth.verify-email', ['useremail' => $user->email]);
    }

    /**
     * Logout currently logged in user.
     */
    public function logout(): RedrectResponse
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
            return view('components.forms.signin');
        } else {
            return view('components.auth.verify-email');
        }
    }

    /**
     * Send a verification email to user's email address.
     */
    public function sendVerificationNotification(Request $request): view
    {
        $user = User::where('email', $request->useremail)->first();

        if ($user->hasVerifiedEmail()) {
            return view('components.forms.signin');
        }
        $user->sendEmailVerificationNotification();

        return view('components.auth.verify-email', ['useremail' => $request->useremail]);
    }
}
