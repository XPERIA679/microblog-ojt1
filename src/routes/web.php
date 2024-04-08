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

Route::post('/register', [UserController::class, 'register']);
