<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function send(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();
        Mail::send('emails.callback', ['data' => $data], function($message) {
            $message->to('ser1372@ukr.net', 'Recipient Name')
                ->subject('Обратный звонок');
        });

        return redirect()->back()->with('message', 'Ваша заявка была отправлена!');
    }
}
