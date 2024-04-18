<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

Route::get('/signup', [SignupController::class, 'showSignup']);
Route::get('/signin', [SigninController::class, 'showSignin']);
Route::get('/create', [UserProfileController::class, 'showProfile']);
