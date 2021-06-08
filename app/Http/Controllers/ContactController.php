<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact/contact');
    }

    public function send(ContactRequest $request)
    {
        dd('salut');
    }
}
