<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'birth_date',
        'address',
        'contact'
    ];

    /**
     * Get the user associated with the profile.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
