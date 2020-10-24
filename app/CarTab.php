<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class CarTab extends Model
{
    public function getNameAttribute()
    {
        return  Str::slug($this->text, '_');
    }

    public function setParamsAttribute()
    {
        parse_str(substr($this->attributes['url'], 9), $output);

        $params = [];

        foreach ($output as $key => $value)
        {
            if($value && $key != 'year' && $key != 'price')
            {
                $params[$key] = $value;
            }
        }

        $this->attributes['params'] = json_encode($params);
    }
}
