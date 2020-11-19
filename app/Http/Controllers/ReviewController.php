<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $cards = Review::orderBy('type', 'desc')->paginate(20);

        return view('reviews', [
            'cards' => $cards,
            'pageType' => 'reviews',
        ]);
    }

    public function showReview($id)
    {
        return view('review-inner', [
            'page' => Review::find($id),
        ]);
    }
}
