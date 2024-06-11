<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * Additional attributes of user
     */
    protected $appends = [
        'followers',
        'followings'
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the profile associated with the user.
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Get the users who are followed by the user.
     */
    public function followings(): HasMany
    {
        return $this->hasMany(Relationship::class, 'follower_id', 'id');
    }

    /**
     * Get the users who are followed by the user.
     */
    public function followers(): HasMany
    {
        return $this->hasMany(Relationship::class, 'following_id', 'id');
    }

    /**
     * Get the posts created by the user
     */
    public function userPost(): HasMany
    {
        return $this->hasMany(UserPost::class, 'user_id');
    }

    /**
     * Get the posts created by the user
     */
    public function postShare(): HasMany
    {
        return $this->hasMany(PostShare::class, 'user_id');
    }

    /**
     * Get the user's followers
     */
    public function getFollowersAttribute(): Collection
    {
        $followerIds = $this->followers()
            ->where('status', 1)
            ->pluck('follower_id')
            ->toArray();

        return self::whereIn('id', array_diff($followerIds, [$this->id]))->get();
    }

    /**
     * Get the user's followed users
     */
    public function getFollowingsAttribute(): Collection
    {
        $followedUserIds = $this->followings()
            ->where('status', 1)
            ->pluck('following_id')
            ->toArray();

        return self::whereIn('id', array_diff($followedUserIds, [$this->id]))->get();
    }
}


