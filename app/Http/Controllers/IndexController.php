<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Banner;
use App\Benefit;
use App\Car;
use App\CarTab;
use App\ContactsTab;
use App\IndexText;
use App\Question;
use App\Review;
use App\Video;
use App\VideoReview;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'reviews' => Review::text()->get(),
            'benefits' => Benefit::all(),
            'auctions' => Auction::all(),
            'banners' => Banner::all(),
            'questions' => Question::all(),
            'texts' => IndexText::all(),
            'contactTabs' => ContactsTab::all(),
            'video' => Video::first(),
            'videoReviews' => Review::video()->get(),
            'carTabs' => CarTab::all(),
        ]);
    }

    public function getTabCars(Request $request)
    {
        $tabParams = $request->json()->all();

        $CarTab = $this->_getCarTab($tabParams['carTabId']);
        $cars = $this->_getCars($CarTab, $tabParams['cardTabCount']);

        $response = null;

        foreach ($cars as $car)
        {
            $response .= view('modules.catalog.card', compact('car'));
        }

        return $response;
    }

    private function _getCarTab($id)
    {
        if ($id == 0)
        {
            return CarTab::first();
        }

        return CarTab::find($id);
    }

    private function _getCars($carTab, int $count = 10)
    {
        $brand = null;

        $params = json_decode($carTab->params, true);

        if (array_key_exists('brand', $params))
        {
            $brand = $params['brand'];

            unset($params['brand']);
        }

        return Car::select()->selectRaw("'$carTab->name' as tabName")->paramFilters($params, $brand)->take($count)->get();
    }
}
