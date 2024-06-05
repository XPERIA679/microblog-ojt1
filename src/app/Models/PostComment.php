<?php

namespace App\Models;

use App\Models\UserPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'post_share_id',
        'content',
    ];

    /**
     * Get the post associated with the comment.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(UserPost::class);
    }

    /**
     * Get the post associated with the comment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
