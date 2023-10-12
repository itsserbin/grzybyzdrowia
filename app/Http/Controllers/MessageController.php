<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class MessageController extends Controller
{
    public function send(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $data = $request->all();
            Mail::send('emails.callback', ['data' => $data], function($message) {
                $message->to('myxomor4iiik@gmail.com', 'Recipient Name')
                    ->subject('Обратный звонок');
            });

            return response()->json(['message' => 'Email sent successfully.']);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());

            return response()->json(['message' => 'Error sending email.'], 500);
        }
    }
}
