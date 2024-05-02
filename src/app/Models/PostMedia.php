<?php

namespace App\Models;

use App\Models\UserPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'image',
    ];

    /**
     * Get the post associated with the media.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(UserPost::class);
    }
}
