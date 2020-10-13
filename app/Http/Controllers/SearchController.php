<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->validate([
            'string' => 'required',
        ]);

        $string = $search['string'];

        $cars = $this->_buildQuery($string);

        CatalogController::unserializeCarImages($cars);

        return view('search', [
            'cars' => $cars,
            'string' => $string,
        ]);
    }

    private function _buildQuery($string)
    {
        $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);

        return Car::where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {
                $q->where('name', 'like', "%{$value}%");
            }
        })->where('status', 'active')->paginate(20);
    }
}
