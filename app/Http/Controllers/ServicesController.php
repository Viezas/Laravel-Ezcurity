<?php

namespace App\Http\Controllers;

use App\Models\Subscriptions;
use Config\information;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services/services');
    }

    public function service($category)
    {
        if (!in_array($category, information::allowedServices()) ) {
            return redirect()->route('home')->with('denied', "Le service recherché n'est pas proposé !");
        }
        else {
            $services = Subscriptions::where('category', $category)->get();
            return view('services/service', [
                'services' => $services
            ]);
        }
    }
}
