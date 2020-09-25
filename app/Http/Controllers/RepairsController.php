<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairsController extends Controller
{
    public function index() {
        return view('repairs');
    }
}
