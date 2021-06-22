<?php

namespace App\Http\Controllers;

use App\Http\Requests\subscribeRequest;
use App\Models\Abonnement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function show($id)
    {
        if (!Auth::user()) {
            return redirect()->route('login')->with('denied', "Vous devez être connecté avant de pouvoir procédé au paiement !");
        }

        try {
            $service = Abonnement::where('id', $id)->get();
            if ($service->isEmpty()) {
                return redirect()->route('services')->with('denied', "Le service recherché n'existe pas !");
            }
            return view('stripe/subscribe', [
                'service' => $service,
                'intent' => Auth::user()->createSetupIntent()
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('services')->with('denied', "Le service recherché n'existe pas !");
        }
    }

    public function subscribe(subscribeRequest $request, int $id)
    {
        try {
            $service = Abonnement::where('id', $id)->get();
            if ($service->isEmpty()) {
                return redirect(url()->previous())->with('denied', "Le service recherché n'existe pas !");
            }

            try {
                Auth::user()->newSubscription('default', $service[0]->stripe_id)
                ->withCoupon($request->discount)
                ->create($request->token);
            } catch (\Throwable $th) {
                return redirect(url()->previous())->with('denied', "Le code promo est invalid !");
            }  
        
            return view('stripe/subscribed');
        } catch (\Throwable $th) {
            return redirect(url()->previous())->with('denied', "Le service recherché n'existe pas !");
        }
    }
}
