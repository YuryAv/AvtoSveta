<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Suggestion extends Model
{
    public function setUrlDecodedAttribute()
    {
        $this->attributes['url_decoded'] = urldecode($this->attributes['url']);
    }
}
