<?php

namespace App\Http\Controllers;

use App\Services\RelationshipService;


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
    public function follow(int $userToFollowId): void    
    {
        $this->relationshipService->follow($userToFollowId);
    }

    /**
     * Calls service to unfollow a user.
     */
    public function unfollow(int $userToUnfollowId): void
    {
        $this->relationshipService->unfollow($userToUnfollowId);
    }
}
