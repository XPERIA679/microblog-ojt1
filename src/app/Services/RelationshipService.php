<?php

namespace App\Services;

use App\Models\Relationship;

class RelationshipService
{
    public function follow(int $userToFollowId): void
    {
        Relationship::updateOrCreate(
            ['follower_id' => auth()->user()->id, 'following_id' => $userToFollowId],
            ['status' => true]
        );
    }

    public function unfollow(int $userToUnfollowId): void
    {
        Relationship::where('follower_id', auth()->user()->id)
            ->where('following_id', $userToUnfollowId)
            ->update(['status' => false]);
    }
}
