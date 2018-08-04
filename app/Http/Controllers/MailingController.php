<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailingController extends Controller
{
    public function create() {
        
        Mail::send('emails.welcome', [], function($m) {
            $m->to('nicuvlad89@gmail.com')
                ->subject('Welcome Welcome');
        });

        return redirect()->route('home')->with('status', 'Email sent');

    }
}
