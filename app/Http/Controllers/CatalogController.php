<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use App\FilterBanner;
use App\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function index(Request $request, $brand = null)
    {
//        dd($request->getRequestUri());
        if ($request->brand)
        {
            $brand = $request->brand;
        }

        $cars = $this->_buildQuery($request, $brand);

        $this->unserializeCarImages($cars);

        return view('catalog', [
            'cars' => $cars,
            'brand' => $brand,
            'banners' => FilterBanner::all(),
//            'text' => $brand ? Brand::where('name', $brand)->first()->text : false,
            'text' =>  $this->_getPageText($request->getRequestUri(), $brand),
        ]);
    }

    private function _getPageText($url, $brand)
    {
        $count = Suggestion::where('url', $url)->count();

        if (!$count)
        {
            return $brand ? Brand::where('name', $brand)->first()->text : false;
        }
        else
        {
            return Suggestion::where('url', $url)->first()->text;
        }
    }

    public static function unserializeCarImages($cars)
    {
        foreach ($cars as $car)
        {
            $car->images = json_decode($car->images);
        }
    }

    private function _buildQuery(Request $request, $brand)
    {
        return Car::where('status', 'active')
            ->when($brand, function ($query, $brand) {
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
            ->whereBetween('year', [$request->year['from'] ?? 0, $request->year['to'] ?? 9999])
            ->whereBetween('price', [$request->price['from'] ?? 0, $request->price['to'] ?? 9999999])
            ->paginate(20)->withPath('?' . $request->getQueryString());
    }
}
