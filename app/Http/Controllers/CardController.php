<?php

namespace App\Http\Controllers;

use App\Car;
use App\CharName;

class CardController extends Controller
{
    public function index($id)
    {
        $car = Car::find($id) ?? abort(404);

        return view('card-inner', [
            'car' => $car,
            'chars' => $this->_getChars($car),
        ]);
    }

    private function _getChars($car)
    {
        $chars = CharName::all();

        $characteristics = [];

        foreach ($chars as $char)
        {
                $characteristics[$char->type][$char->name] = $car->{$char->eng_name};
        }

        return $characteristics;
    }
}
