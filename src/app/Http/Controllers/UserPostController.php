<?php

namespace App\Http\Controllers;

use App\Models\PostLike;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\UserPostService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\EditUserPostRequest;
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
        return view('components.create-post', [
            'postsAndMedia' => $this->userPostService->getAllPostsAndMedia(),
            'allLikedPosts' => $this->userPostService->getAllLikedPosts()
        ]);
    }

    /**
     * Updates a post's content and/or media.
     */
    public function edit(EditUserPostRequest $request):RedirectResponse
    {
        $this->userPostService->edit($request);
        return redirect('/');
    }

    /**
     * Gets the post and media to Edit.
     * Displays edit page.
     */
    public function showEditPostPage(int $post_id): View
    {
        return view('components.edit-post', [
            'postAndMediaToEdit' => $this->userPostService->getUserPostAndMediaToEdit($post_id),
        ]);
    }

    /**
     * Calls service to delete post.
     */
    public function delete(Request $request):RedirectResponse
    {
        $this->userPostService->delete($request->userPostToDeleteId);
        return redirect('/');
    }

    public function likePost(Request $request):RedirectResponse
    {
        $this->userPostService->likePost($request->post);
        return redirect('/posts-page');
    }

    public function unlikePost(Request $request):RedirectResponse
    {
        $this->userPostService->unlikePost($request->post);
        return redirect('/posts-page');
    }
}
