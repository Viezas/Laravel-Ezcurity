<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //LOGIN route
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(["error" => "L'adresse email fournise ou le mot de passe est incorrecte !"], 401);
        }

        $user->tokens()->where('tokenable_id', $user->id)->delete();

        $random = Str::random(40);
        $token = $user->createToken($random)->plainTextToken;
        return response()->json([
            'token' => $token,
            'name' => $user->name,
            'email' => $user->email
        ], 200);
    }

    //SIGNIN route
    public function register(RegisterRequest $request)
    {
        $exist = User::where('email', $request->email)->exists();
        if($exist)
        {
            return response()->json([
                'success' => false,
                "message" => "L'adresse email est invalid !"
            ], 409);
        }

        $exist = User::where('username', $request->name)->exists();
        if($exist)
        {
            return response()->json([
                'success' => false,
                "message" => "Le name est invalid !"
            ], 409);
        }

        $user = User::create([
            'username' => $request->name,
            'email' => $request->phone,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        $random = Str::random(40);
        $token = $user->createToken($random)->plainTextToken;
        return response()->json([
            'success' => true,
            'token' => $token,
            'name' => $user->username,
            'email' => $user->email,
            'phone' => $user->phone
        ], 201);
    }

    //LOGOUT route
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'success' => true,
            'message' => "Vous avez été deconnecté !"
        ], 204);
    }

    //ME route
    public function me()
    {
        $user = User::where('email', Auth::user()->email)->get();
        return response()->json([
            'success' => true,
            'id' => $user[0]->id,
            'name' => $user[0]->username,
            'email' => $user[0]->email,
            'created_at' => $user[0]->created_at,
            'updated_at' => $user[0]->updated_at
        ], 200);
    }
}
