<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Banner;
use App\Benefit;
use App\ContactsTab;
use App\IndexText;
use App\Question;
use App\Review;
use App\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'reviews' => Review::all(),
            'benefits' => Benefit::all(),
            'auctions' => Auction::all(),
            'banners' => Banner::all(),
            'questions' => Question::all(),
            'texts' => IndexText::all(),
            'tabs' => ContactsTab::all(),
            'video' => Video::first(),
        ]);
    }
}
