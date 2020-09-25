<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index() {

        $cars = Car::paginate(20);

        return view('catalog', [
            'cars' => $cars,
        ]);
    }
}
