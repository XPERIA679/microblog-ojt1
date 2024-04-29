<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\SignupRequest;
use App\Services\SignupService;

class SignupController extends Controller
{
    protected $signupService;

    /**
     * Creates a SignUpController instance
     */
    public function __construct(SignupService $signupService)
    {
        $this->signupService = $signupService;
    }

    /**
     * Return view user to sign up page.
     */
    public function showSignup(): View
    {
        return view('components.forms.signup');
    }

    /**
     * Calls service to register a new user.
     */
    public function register(SignupRequest $request): View
    {
        $userEmail = $this->signupService->register($request->all());
        return view('components.auth.verify-email', ['userEmail' => $userEmail]);
    }

    /**
     *  Calls service to mark the user as verified after clicking 'verify button'.
     */
    public function verifyEmail(string $id, string $hash): View
    {
        $view = $this->signupService->verifyEmail($id, $hash);
        return view($view);
    }

    /**
     * Calls service to send verification email to user's email address.
     * Redirects user to components.auth.verify-email or components.forms.signin
     */
    public function sendVerificationNotification(Request $request): View
    {
        if($this->signupService->sendVerificationNotification($request->userEmail)) {
            return view('components.forms.signin');    
        }
        return view('components.auth.verify-email', ['userEmail' => $request->userEmail]);
    }
}
