<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class FeedbackController extends Controller
{

    public function send(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'message' => 'required|max:500',
            'phone' => 'required|min:10',
            'city' => 'required|min:3|max:50'
        ]);

        $data = new stdClass();

        $data->name = $request->input('name');
        $data->city = $request->input('city');
        $data->tel_number = $request->input('phone');
        $data->message = $request->input('message');

        Mail::to('asia-ved@pecom.ru')->send(new FeedbackMailer($data));
        return response('Ваше сообщение успешно отправлено');
    }
}
