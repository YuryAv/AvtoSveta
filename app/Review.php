<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    public function scopeVideo($query)
    {
        return $query->where('type', 'video');
    }

    public function scopeText($query)
    {
        return $query->where('type', 'text');
    }
    
}
