<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\UserPostService;
use App\Services\PostShareService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\EditUserPostRequest;
use App\Http\Requests\CreateUserPostRequest;

class UserPostController extends Controller
{
    public $userPostService;
    public $postShareService;

    public function __construct() {
        $this->userPostService = new UserPostService;
        $this->postShareService = new PostShareService;

    }

    /**
     * Create a new post for the user.
     */
    public function create(CreateUserPostRequest $request): RedirectResponse
    {
        $this->userPostService->create($request);
        return redirect()->back()->with('notifMessage', 'Post Created Successfully!');
    }

    /**
     * Gets all the posts and media, and post shares
     * Displays the posts page
     */
    public function showPostsPage(): View
    {
        return view( 'feed.index',[
            'postsMediaAndShares' => $this->userPostService->getAllPostsAndMediaAndShares()
        ]);
    }

    /**
     * Updates a post's content and/or media.
     */
    public function edit(EditUserPostRequest $request):RedirectResponse
    {
        $this->userPostService->edit($request);
        return redirect()->back()->with('notifMessage', 'Post Edited Successfully!');
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
        $this->userPostService->delete($request->userPostToDeleteId, $request->type);
        return redirect()->back()->with('notifMessage', 'Post Deleted Successfully!');
    }

    /**
     * Calls the service to create a like record.
     */
    public function likePost(Request $request):RedirectResponse
    {
        $this->userPostService->likePost(['type' => $request->type, 'id' => $request->id]);
        return redirect()->back()->with('notifMessage', 'Post Liked Successfully!');
    }

    /**
     * Calls serivice to unlike a post.
     */
    public function unlikePost(Request $request):RedirectResponse
    {
        $this->userPostService->unlikePost(['type' => $request->type, 'id' => $request->id]);
        return redirect()->back()->with('notifMessage', 'Post Unliked Successfully!');
    }
}

