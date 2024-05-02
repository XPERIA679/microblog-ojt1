<?php

namespace App\Models;

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
     * Get the user associated with the post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
