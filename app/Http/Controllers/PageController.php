<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::where('url', $slug)->first();

        if (!$page)
        {
            abort(404);
        }

        return view('default-page', [
            'page' => $page,
        ]);
    }
}
