<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\PostShareController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\RelationshipController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\AuthenticateWithErrorView;

Route::get('/api/usernames', [UserController::class, 'searchUsernames']);
Route::options('/api/usernames', function() {
    return response()->json([], 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
});

Route::get('/', [HomeController::class, 'showHome']);
Route::get('/email-verified', [SignUpController::class, 'emailVerified']);
Route::get('/email/verify/{id}/{hash}', [SignupController::class, 'verifyEmail'])->middleware(['signed'])->name('verification.verify');
Route::get('/resend-email', [SignupController::class, 'sendVerificationNotification']);
Route::post('/email/verification-notification', [SignupController::class, 'sendVerificationNotification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
Route::get('/verification-page/{userEmail}', [SignupController::class, 'showVerificationPage']);

Route::middleware([AuthenticateWithErrorView::class])->group(function () {
    Route::get('/posts-page', [UserPostController::class, 'showPostsPage']);
    Route::get('/edit-post-page/{post}', [UserPostController::class, 'showEditPostPage']);
    Route::get('/logout', [SigninController::class, 'logout']);
    Route::get('/update-profile', [ProfileController::class, 'showUpdateProfile']);
    Route::put('/update-profile', [ProfileController::class, 'update'])->name('update-profile');
    Route::post('/create-post', [UserPostController::class, 'create']);
    Route::post('/like-post', [UserPostController::class, 'likePost']);
    Route::post('/share-post', [PostShareController::class, 'create']);
    Route::put('/edit-post', [UserPostController::class, 'edit']);
    Route::delete('/unlike-post', [UserPostController::class, 'unlikePost']);
    Route::delete('/delete-post/{post}', [UserPostController::class, 'delete']);
    Route::post('/add-comment', [PostCommentController::class, 'create'])->name('post.comment.create');
    Route::delete('/delete-comment', [PostCommentController::class, 'delete']);
    Route::put('/edit-comment', [PostCommentController::class, 'update']);
});

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/signup', [SignupController::class,'showSignup']);
    Route::get('/signin', [SigninController::class, 'showSignin']);
    Route::post('/register', [SignupController::class, 'register']);
    Route::post('/login', [SigninController::class, 'login']);
});

Route::fallback(fn() => view('components.errors.not-found'));
