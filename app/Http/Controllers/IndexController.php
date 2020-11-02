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
            'cars' => $this->_getCars($carTabs, setting('site.count_tab_cars')),
        ]);
    }

    private function _getCars($carTabs, int $count = 10)
    {
        $cars = new Collection();

        $brand = null;

        foreach ($carTabs as $carTab)
        {
            $params = json_decode($carTab->params, true);

            if (array_key_exists('brand', $params))
            {
                $brand = $params['brand'];

                unset($params['brand']);
            }

            $carsBlock = Car::select()->selectRaw("'$carTab->name' as tabName")->paramFilters($params, $brand)->take($count)->get();

            $cars = $cars->merge($carsBlock);
        }

        return $cars;
    }
}
