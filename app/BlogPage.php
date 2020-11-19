<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class BlogPage extends Model
{
    public function getUrlAttribute()
    {
        return $this->id;
    }
    
}
