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
            'tel_number' => 'required',
            'city' => 'required'
        ]);

        $data = new stdClass();

        $data->name = $request->input('name');
        $data->city = $request->input('city');
        $data->tel_number = $request->input('tel_number');
        $data->message = $request->input('message');

        Mail::to('fafeh50394@wireps.com')->send(new FeedbackMailer($data));
        return response('Ваше сообщение успешно отправлено');
    }
}
