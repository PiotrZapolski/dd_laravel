<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    protected $fillable = [
        'description',
        'path',
    ];

    protected function profile(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
