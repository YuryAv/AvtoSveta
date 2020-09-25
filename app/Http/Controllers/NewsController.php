<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('news', ['news' => $news]);
    }

    public function showNews($id)
    {
        $news = News::find($id);

        $news->date = $this->_formatDate($news->created_at);

        return view('news-inner', ['news' => $news]);
    }

    private function _formatDate($date)
    {
        $intlFormatter = new \IntlDateFormatter('ru_RU', \IntlDateFormatter::SHORT, \IntlDateFormatter::SHORT);
        $intlFormatter->setPattern('d MMMM yyyy');

        return $intlFormatter->format($date);
    }
}
