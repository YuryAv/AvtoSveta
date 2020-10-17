<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index($id) {

        return view('auction', [
            'auction' => Auction::find($id),
        ]);
    }
}
