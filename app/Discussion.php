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

    // Relationship to the User model
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship to the Channel model
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
