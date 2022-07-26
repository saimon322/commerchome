<?php

namespace App\Http\Controllers;

use App\Mail\RequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to("commercreal@gmail.com")->send(new RequestMail($request));
    }
}
