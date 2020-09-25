<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        $feedback = new Feedback;

        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->comment = $request->comment;

        if ($request->parameters)
        {
            $feedback->comment = "Тип: $request->type. Год: от $request->year_from до $request->year_to. Цена: $request->price";
        }
        
        $feedback->save();

        return redirect()->back();
    }
}
