<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $msg = $request->validate([
            'name'      => "required|min:3|max:100",
            'email'     => "required|email",
            'subject'   => "required|min:3|max:150",
            'content'   => "required"
        ]);
        
        Mail::to("manuel@gmail.com")->queue(new ContactMail($msg));

        return "Email sended";
    }
}
