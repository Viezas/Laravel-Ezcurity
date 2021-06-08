<?php

namespace App\Http\Controllers;

use App\Http\Requests\subscribeRequest;
use App\Models\Subscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function show($id)
    {
        // if (!Auth::user()) {
        //     return redirect()->route('login')->with('denied', "Vous devez être connecté avant de pouvoir procédé au paiement !");
        // }

        try {
            $service = Subscriptions::where('id', $id)->get();
            if ($service->isEmpty()) {
                return redirect()->route('services')->with('denied', "Le service recherché n'existe pas !");
            }
            return view('stripe/subscribe', [
                'service' => $service
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('services')->with('denied', "Le service recherché n'existe pas !");
        }
    }

    public function subscribe(subscribeRequest $request, $id)
    {
        try {
            $service = Subscriptions::where('id', $id)->get();
            if ($service->isEmpty()) {
                return redirect(url()->previous())->with('denied', "Le service recherché n'existe pas !");
            }
            return view('stripe/subscribed', [
                'service' =>$service
            ]);
        } catch (\Throwable $th) {
            return redirect(url()->previous())>with('denied', "Le service recherché n'existe pas !");
        }
    }
}
