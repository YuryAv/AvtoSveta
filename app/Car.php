<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function scopeHit($query)
    {
        return $query->where('additional', 1);
    }

    public function getImageListAttribute()
    {
        return json_decode($this->images);
    }

    public function scopeParamFilters($query, $params, $brand = null)
    {
        if ($params || $brand)
        {
            $filterParams = [
                'hit' => false,
                'body' => false,
                'gear' => false,
                'fuel' => false,
                'transmission' => false,
                'year' => false,
                'price' => false,
            ];

            foreach ($params as $key => $value)
            {
                $filterParams[$key] = $value;
            }

            return $query->where('status', 'active')
                ->when($filterParams['hit'] == 1, function ($query) {
                    return $query->hit();
                })
                ->when($brand, function ($query, $brand) {
                    return $query->where('brand', $brand);
                })
                ->when($filterParams['body'], function ($query, $body) {
                    return $query->whereIn('body_type', $body);
                })
                ->when($filterParams['gear'], function ($query, $gear) {
                    return $query->whereIn('gear', $gear);
                })
                ->when($filterParams['fuel'], function ($query, $fuel) {
                    return $query->whereIn('fuel', $fuel);
                })
                ->when($filterParams['transmission'], function ($query, $transmission) {
                    return $query->whereIn('transmission', $transmission);
                })
                ->whereBetween('year', [
                    empty($filterParams['year']['from']) ? 0 : $filterParams['year']['from'],
                    empty($filterParams['year']['to']) ? 9999: $filterParams['year']['to']
                ])
                ->whereBetween('price', [
                    empty($filterParams['price']['from']) ? 0 : $filterParams['price']['from'],
                    empty($filterParams['price']['to']) ? 9999999 : $filterParams['price']['to']
                ]);
        }
    }
}
