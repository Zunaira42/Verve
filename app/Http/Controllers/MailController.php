<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendmail()
    {
        $to = "zunaira1548036@gmail.com";
        $msg = "hello laravel welcome";
        $subject = "verve welcome mail";
        // to jis ko bhjni ha , $msg jo mesg bjn , $subject yahi jo mail me shooq hu 
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
    }
}
