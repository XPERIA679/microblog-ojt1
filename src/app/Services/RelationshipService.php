<?php

namespace App\Services;

use App\Models\Relationship;

class RelationshipService
{
    /**
     * Creates a new relationship
     */
    public function follow(int $userToFollowId): string
    {
        Relationship::updateOrCreate(
            [
                'follower_id' => auth()->user()->id, 
                'following_id' => $userToFollowId
            ],
            [
                'status' => true
            ]
        );

        return '/posts-page';
    }

    /**
     * Changes the status of relationship to false
     */
    public function unfollow(int $userToUnfollowId): string
    {
        Relationship::where('follower_id', auth()->user()->id)
            ->where('following_id', $userToUnfollowId)
            ->update(['status' => false]);
        
            return '/posts-page';
    }
}
