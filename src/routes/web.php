<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('components.forms.registration');
});

Route::get('/update-profile', function () {
    $profile = Profile::where('user_id', auth()->user()->id)->firstOrFail();
    return view('components.create-profile', ['profile' => $profile]);
});

Route::post('/register', [
    UserController::class, 
    'register'
]);

Route::get('/email/verify/{id}/{hash}', [
    UserController::class, 
    'verifyEmail'
])->middleware(['signed'])->name('verification.verify');

Route::post('/email/verification-notification', [
    UserController::class, 
    'sendVerificationNotification'
])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/resend-email', [
    UserController::class, 
    'sendVerificationNotification'
]);
