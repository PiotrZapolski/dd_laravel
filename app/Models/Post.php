<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'content',
        'scheduled_at',
        'posted_at',
    ];

    protected function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    protected function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    protected function casts()
    {
        return [
            'scheduled_at' => 'datetime',
            'posted_at' => 'datetime',
        ];
    }
}
