<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/update-profile', function () {
    $profile = Profile::where('user_id', auth()->user()->id)->firstOrFail();
    return view('components.create-profile', ['profile' => $profile]);
});

Route::post('/update-profile', [ProfileController::class, 'update']);
