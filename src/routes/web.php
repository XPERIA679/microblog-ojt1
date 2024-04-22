<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;


Route::get('/', [
    SignupController::class,
     'showSignup']);

Route::get('/signin', [
    SigninController::class,
     'showSignin']);

Route::get('/logout', [
    SigninController::class,
     'logout']);

Route::get('/email/verify/{id}/{hash}', [
    SignupController::class,
    'verifyEmail'
])->middleware(['signed'])->name('verification.verify');

Route::get('/resend-email', [
    SignupController::class,
    'sendVerificationNotification'
]);

Route::post('/email/verification-notification', [
    SignupController::class,
    'sendVerificationNotification'
])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/register', [
    SignupController::class,
    'register'
]);

Route::post('/login', [
    SigninController::class,
     'login']);
