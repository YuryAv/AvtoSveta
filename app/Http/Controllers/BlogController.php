<?php

namespace App\Http\Controllers;

use App\BlogPage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $cards = BlogPage::paginate(20);

        return view('blog', [
            'cards' => $cards,
        ]);
    }

    public function showBlog($id)
    {
        return view('default-page', [
            'page' => BlogPage::find($id),
        ]);
    }
}
