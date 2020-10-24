<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function scopeHit($query)
    {
        return $query->where('additional', 1);
    }

    public function scopeParamFilters($query, $params, $brand = null)
    {
        if ($params)
        {
            $filterParams = [
                'hit' => false,
                'body' => false,
                'gear' => false,
                'fuel' => false,
                'transmission' => false,
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
                ->whereBetween('year', [$filterParams['year']['from'] ?? 0, $filterParams['year']['to'] ?? 9999])
                ->whereBetween('price', [$filterParams['price']['from'] ?? 0, $filterParams['price']['to'] ?? 9999999]);
        }
    }
}
