<?php

namespace App\Services;

use App\Models\Relationship;
class RelationshipService
{
    public function follow(int $userToFollowId): void
    {
        $existingRelationship = Relationship::where('user_id_follower', auth()->user()->id)
            ->where('user_id_following', $userToFollowId)
            ->onlyTrashed()
            ->first();

        if ($existingRelationship) {
            $existingRelationship->restore();
        } else {
            Relationship::create([
                'user_id_follower' => auth()->user()->id,
                'user_id_following' => $userToFollowId
            ]);  
        }
    }

    public function unfollow(int $userToUnfollowId): void
    {
        Relationship::where('user_id_follower', auth()->user()->id)
            ->where('user_id_following', $userToUnfollowId)
            ->delete();
    }
}
