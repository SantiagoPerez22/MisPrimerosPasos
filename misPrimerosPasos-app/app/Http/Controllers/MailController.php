<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $toEmail = 'inzar@live.cl';

        Mail::send('emails.welcome', [], function($message) use ($toEmail) {
            $message->to($toEmail)
                ->subject('Welcome to our platform');
        });

        return 'Email sent successfully!';
    }
}
