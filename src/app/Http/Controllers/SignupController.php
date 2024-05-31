<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\SignupService;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\RedirectResponse;

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
    public function verifyEmail(string $id, string $hash): RedirectResponse
    {
        return redirect($this->signupService->verifyEmail($id, $hash));
    }

    /**
     * Calls service to send verification email to user's email address.
     * Redirects user to components.auth.verify-email or components.forms.signin
     */
    public function sendVerificationNotification(Request $request): mixed
    {
        if($this->signupService->sendVerificationNotification($request->userEmail)) {
            return redirect('/');    
        }
        return view('components.auth.verify-email', ['userEmail' => $request->userEmail]);
    }

    /**
     * Show verification page.
     */
    public function showVerificationPage(string $email):View
    {
        return view('components.auth.verify-email', ['userEmail' => $email]);
    }
}
