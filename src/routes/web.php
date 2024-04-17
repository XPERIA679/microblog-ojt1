<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;


Route::get('/signup', [SignupController::class, 'showSignup']);
Route::get('/signin', [SigninController::class, 'showSignin']);
// Route::get('/login', function () {
//     return view('components.forms.login');
// });

// Route::get('/home', function () {
//     return view('components.homepage.home');
// });

// Route::get('/signin', function () {
//     return view('auth.signin');
// });
