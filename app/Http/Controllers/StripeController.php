<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function billingGate()
    {
        return response()->json(Auth::user()->billingPortalUrl('http://localhost:8080/') ,200);
    }
}
