<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $cards = Stock::paginate(20);

        return view('blog', [
            'cards' => $cards,
            'pageType' => 'stocks',
        ]);
    }

    public function showStock($slug)
    {
        return view('default-page', [
            'page' => Stock::where('url', $slug)->first(),
        ]);
    }
}
