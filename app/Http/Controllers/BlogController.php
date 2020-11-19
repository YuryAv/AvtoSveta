<?php

namespace App\Http\Controllers;

use App\BlogPage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $cards = BlogPage::orderBy('created_at', 'desc')->paginate(20);

        return view('blog', [
            'cards' => $cards,
            'pageType' => 'blog',
            'isInnerPage' => false,
        ]);
    }

    public function showBlog($id)
    {
        return view('default-page', [
            'page' => BlogPage::find($id),
            'isInnerPage' => true,
        ]);
    }
}
