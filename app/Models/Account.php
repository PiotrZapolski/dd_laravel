<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    protected $fillable = [
        'name',
        'description',
        'phone',
        'manner',
        'address',
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
