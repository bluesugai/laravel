<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function practice(){
        $title = '練習問題';
        $description = '課題の例です';
        return view('blade_sample',[
            'title' => $title,
            'description' => $description,
        ]);
    }
    public function message_sample(){
        $message = \App\Message::all()->first();
        return view('message_sample',[
            'message' => $message,
        ]);
    }
    public function message_practice(){
        $title = 'Messageモデルの利用';
        $message = \App\Message::find(5);
        return view('message_practice',[
            'title' => $title,
            'message' => $message,
        ]);
    }
    public function blade_example(){
        $title = 'bladeテンプレートの様々な機能';
        $num = 10;
        $messages = \App\Message::all();
        return view('blade_example',[
            'title' => $title,
            'num' => $num,
            'messages' => $messages,
        ]);
    }
}
