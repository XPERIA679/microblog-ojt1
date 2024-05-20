<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostShare extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'post_id',
        'user_id',
        'repost_content',
    ];

    /**
     * Get the post shared by the user.
     */
    public function post(): BelongsTo 
    {
        return $this->belongsTo(UserPost::class, 'post_id');
    }

    /**
     * Get the user that shared the post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
