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
        if ($request->brand)
        {
            $brand = $request->brand;
        }

        $cars = Car::paramFilters($request->post(), $brand)->paginate(20)->withPath('?' . $request->getQueryString());

        return view('catalog', [
            'cars' => $cars,
            'brand' => $brand,
            'banners' => FilterBanner::all(),
            'text' =>  $this->_getPageText($request->getRequestUri(), $brand),
        ]);
    }

    private function _getPageText($url, $brand)
    {
        $url = urldecode($url);
        $suggestion = Suggestion::where('url_decoded', $url);

        $count = $suggestion->count();

        if (!$count)
        {
            return $brand ? Brand::where('name', $brand)->first()->text : false;
        }
        else
        {
            return $suggestion->first()->text;
        }
    }

    public static function unserializeCarImages($cars)
    {
        foreach ($cars as $car)
        {
            $car->images = json_decode($car->images);
        }
    }
}
