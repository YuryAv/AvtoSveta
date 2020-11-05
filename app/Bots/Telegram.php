<?php

namespace App\Bots;

class Telegram {
    public $token = '';

    public function __construct($token) {
        $this->token = $token;
    }

    public function send($id, $message) {
        $data = array(
            'chat_id'      => $id,
            'text'     => $message,
        );

        $out = $this->request('sendMessage', $data);

        return $out;
    }

    public  function request($method, $data = array()) {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot' . $this->token .  '/' . $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $out = json_decode(curl_exec($curl), true);

        curl_close($curl);

        return $out;
    }

    public function sendMessage($time, $phone, $name, $comment) {
        $message = "$time\n*Новая заявка на сайте*\nИмя: $name\nТелефон: $phone\nКомментарий: $comment";


        $url = "https://api.telegram.org/bot{$this->token}/sendMessage?" . http_build_query([
                'chat_id' => env('TG_GROUP_CHAT_ID'),
                'text' => $message,
                'parse_mode' => 'markdown'
            ]);
        $ch = curl_init();
        $optArray = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        ];
        curl_setopt_array($ch, $optArray);
        curl_exec($ch);
        curl_close($ch);
    }
}