<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Banner;
use App\Benefit;
use App\Car;
use App\CarTab;
use App\ContactsTab;
use App\Form;
use App\IndexText;
use App\Question;
use App\Review;
use App\Video;
use App\VideoReview;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $carTabs = CarTab::all();

        return view('index', [
            'reviews' => Review::all(),
            'benefits' => Benefit::all(),
            'auctions' => Auction::all(),
            'banners' => Banner::all(),
            'questions' => Question::all(),
            'texts' => IndexText::all(),
            'contactTabs' => ContactsTab::all(),
            'video' => Video::first(),
            'videoReviews' => VideoReview::all(),
            'carTabs' => $carTabs,
            'cars' => $this->_getCars($carTabs),
        ]);
    }

    private function _getCars($carTabs)
    {
        $cars = new Collection();

        foreach ($carTabs as $carTab)
        {
            $carsBlock = Car::select()->selectRaw("'$carTab->name' as tabName")->paramFilters(json_decode($carTab->params))->take(10)->get();

            $cars = $cars->merge($carsBlock);
        }

        return $cars;
    }
}
