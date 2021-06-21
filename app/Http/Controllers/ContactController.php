<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact/contact');
    }

    public function send(ContactRequest $request)
    {
        Mail::to('b3cd615f2b-918250@inbox.mailtrap.io')->send(new SendMail($request));

        return redirect()->route('contact')->with('success', "Message envoyé !");
    }

    //API CONTROLLER

    public function apiSend(ContactRequest $request)
    {
        Mail::to('b3cd615f2b-918250@inbox.mailtrap.io')->send(new SendMail($request));

        return response()->json([
            'success' => true,
            'message' => "Votre email a été envoyé !"
        ], 200);
    }
}
