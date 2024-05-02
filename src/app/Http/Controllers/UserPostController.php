<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use App\Models\PostMedia;
use Illuminate\View\View;
use App\Services\UserPostService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CreateUserPostRequest;

class UserPostController extends Controller
{   
    public $userPostService;

    public function __construct() {
        $this->userPostService = new UserPostService;
    }

    /**
     * Create a new post for the user.
     */
    public function create(CreateUserPostRequest $request): RedirectResponse 
    {
        $this->userPostService->create($request);
        return redirect('/');
    }

    /**
     * Gets all the posts and media
     * Displays the posts page
     */
    public function showPostsPage(): View
    {
        $userPosts = UserPost::all();
        $postMedia = PostMedia::all();

        return view('components.create-post', [
            'userPosts' => $userPosts, 
            'postMedia' => $postMedia
        ]);
    }
}
