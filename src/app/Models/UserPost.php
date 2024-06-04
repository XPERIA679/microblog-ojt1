<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content'
    ];

    /**
     * Get the user associated with the post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Gets all like records for the user post
     */
    public function postLike(): HasMany
    {
        return $this->hasMany(PostLike::class, 'post_id');
    }

    /**
     * Gets all comment records for the user post
     */
    public function postComment(): HasMany
    {
        return $this->hasMany(PostComment::class, 'post_id');
    }

    /**
     * Gets the post media related to the user post
     */
    public function postMedia(): HasOne
    {
        return $this->hasOne(PostMedia::class, 'post_id');
    }

    /**
     * Gets all the post shares related to the user post
     */
    public function postShare(): HasMany
    {
        return $this->hasMany(PostShare::class, 'post_id');
    }
}
