<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile/profile');
    }

    public function subscriptions()
    {
        return view('profile/subscriptions');
    }

    public function billing()
    {
        return view('profile/billing');
    }

    public function update(UpdateUserRequest $request)
    {

        if(!$request->password){
            User::where('id', Auth::user()->id)->update([
                'username' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            return redirect()->route('profile')->with('success', "Votre compte a été mise à jour !");
        }

        User::where('id', Auth::user()->id)->update([
            'username' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('profile')->with('success', "Votre compte a été mise à jour !");
    }

    //API routes

    public function me()
    {
        // $user = User::where('id', Auth::user()->id)->get();
        return response()->json(Auth::user(), 200);
    }
}
