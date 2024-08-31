<?php

namespace LaravelForum;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    // Define the relationship with discussions
    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }
}
