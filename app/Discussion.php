<?php

namespace LaravelForum;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    // Allow mass assignment on these fields
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'channel_id',
        'slug',
    ];

    // Add any relationships or additional methods here...
}
