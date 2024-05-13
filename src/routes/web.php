<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostCommentController;


Route::get('/', [
    HomeController::class,
     'showHome']);

Route::get('/signup', [
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

Route::get('/update-profile', function () {
    $profile = Profile::where('user_id', auth()->user()->id)->firstOrFail();
    return view('components.create-profile', ['profile' => $profile]);
});

Route::post('/update-profile', [
    ProfileController::class,
    'update'
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
    'login'
]);

Route::middleware(['auth'])->group(function () {
    Route::get('/posts-page', [UserPostController::class, 'showPostsPage']);
    Route::post('/create-post', [UserPostController::class, 'create']);
    Route::get('/edit-post-page/{post}', [UserPostController::class, 'showEditPostPage']);
    Route::put('/edit-post', [UserPostController::class, 'edit']);
    Route::delete('/delete-post/{post}', [UserPostController::class, 'delete']);
    Route::post('/like-post/{post}', [UserPostController::class, 'likePost']);
    Route::delete('/unlike-post/{post}', [UserPostController::class, 'unlikePost']);
    Route::post('/add-comment', [PostCommentController::class, 'create']);
    Route::delete('/delete-comment', [PostCommentController::class, 'delete']);
    Route::put('/edit-comment', [PostCommentController::class, 'update']);
});
