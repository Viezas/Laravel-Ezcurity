<?php

namespace App\Http\Controllers;

use App\Http\Requests\subscribeRequest;
use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function billingGate()
    {
        return response()->json(Auth::user()->billingPortalUrl('https://ezcurityapp.web.app/') ,200);
    }

    public function showPlan(int $id)
    {
        try {
            $plan = Abonnement::where('id', $id)->get();
            return response()->json([
                "success" => true,
                "plan" => $plan,
                'intent' => Auth::user()->createSetupIntent()
            ] ,200);

        } catch (\Throwable $e) {
            return response()->json([
                "success" => false,
                "message" => "Ce plan n'existe pas !"
            ] ,404);
        }
    }

    public function subscribe(subscribeRequest $request, int $id)
    {
        if (Abonnement::where('id', $id)->get()->isEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "Le service recherché n'existe pas !"
            ] ,404);
        }
        else{
            $service = Abonnement::where('id', $id)->get();
            try {
                $subscribe = Auth::user()->newSubscription('default', $service[0]->stripe_id)
                ->withCoupon($request->discount)
                ->create($request->token);

                return response()->json([
                    "success" => true,
                    "message" => "Abonnement effectué !"
                ], 201);
            } catch (\Throwable $th) {
                return response()->json([
                    "success" => false,
                    "message" => 'Le code promo est invalid !'
                ], 422);
            }
        }
    }
}
