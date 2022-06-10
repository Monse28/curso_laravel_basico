<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);
        //enviar emails
        Mail::to('monsecante.s22@gmail.com')->queue(new MessageReceived($message));
        //return new MessageReceived($message);
        return back()->with('status', 'Recibimos tu mensaje en menos de 24 horas te responderemos');
    }
}
