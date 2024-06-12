<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RelationshipService;
use Illuminate\Http\RedirectResponse;

class RelationshipController extends Controller
{
    public $relationshipService;

    public function __construct(RelationshipService $relationshipService)
    {
        $this->relationshipService = $relationshipService;
    }
    
    /**
     * Calls service to follow a user.
     */
    public function follow(Request $request): RedirectResponse
    {
        return redirect($this->relationshipService->follow($request->userToFollowId))->with('notifMessage', 'Followed User Successfully!');
    }

    /**
     * Calls service to unfollow a user.
     */
    public function unfollow(Request $request): RedirectResponse
    {
        return redirect($this->relationshipService->unfollow($request->userToUnfollowId))->with('notifMessage', 'Unfollowed User Successfully!');
    }
}
