<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function follow(Request $request): void    
    {
        $this->relationshipService->follow($request->user_to_follow);
    }

    /**
     * Calls service to unfollow a user.
     */
    public function unfollow(Request $request): void
    {
        $this->relationshipService->unfollow($request->user_to_unfollow);
    }
}
