<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('homepage/welcome');
    }
}
