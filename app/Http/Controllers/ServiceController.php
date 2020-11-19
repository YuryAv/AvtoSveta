<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $cards = Service::paginate(20);

        return view('blog', [
            'cards' => $cards,
            'pageType' => 'services',
        ]);
    }

    public function showService($slug)
    {
        return view('default-page', [
            'page' => Service::where('url', $slug)->first(),
        ]);
    }
}
