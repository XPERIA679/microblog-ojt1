<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relationship extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'following_id',
        'follower_id',
        'status'
    ];

    /**
     * Get the user who is being followed.
     */
    public function followingUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_following');
    }

    /**
     * Get the user who is the follower.
     */
    public function followerUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_follower');
    }
}
