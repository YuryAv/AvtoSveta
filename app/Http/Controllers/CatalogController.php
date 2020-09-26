<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index(Request $request, $brand = null)
    {
        if ($request->brand)
        {
            $brand = $request->brand;
        }

        return view('catalog', [
            'cars' => $this->_buildQuery($request, $brand),
            'brand' => $brand,
            'text' => $brand ? Brand::where('name', $brand)->first()->text : false,
        ]);
    }

    private function _buildQuery(Request $request, $brand)
    {
        return Car::when($brand, function ($query, $brand) {
            return $query->where('brand', $brand);
        })
            ->when($request->body, function ($query, $body) {
                return $query->whereIn('body_type', $body);
            })
            ->when($request->gear, function ($query, $gear) {
                return $query->whereIn('gear', $gear);
            })
            ->when($request->fuel, function ($query, $fuel) {
                return $query->whereIn('fuel', $fuel);
            })
            ->when($request->transmission, function ($query, $transmission) {
                return $query->whereIn('transmission', $transmission);
            })
            ->when($request->year['from'] || $request->year['to'], function ($query, $year) {
                return $query->whereBetween('year', [$year['from'] ?? 0, $year['to'] ?? 9999]);
            })
            ->when($request->price['from'] || $request->price['to'], function ($query, $price) {
                return $query->whereBetween('price', [$price['from'] ?? 0, $price['to'] ?? 9999999]);
            })
            ->paginate(20);
    }
}
