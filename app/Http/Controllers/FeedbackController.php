<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Bots\Telegram;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    const TG_TOKEN = '1481347293:AAGL8VxmqNdX5A1ffWxyO7S6fwEDvF-fb3Q';

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

        $this->_sendToTG($feedback);

        return redirect()->back();
    }

    private function _sendToTG($feedback)
    {
        $tg = new Telegram(self::TG_TOKEN);
        date_default_timezone_set('Europe/Moscow');
        $time = date('d.m.Y H:i', time());
        $tg->sendMessage($time, $feedback->phone, $feedback->name, $feedback->comment);
    }
}
