<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\News;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }
        return view('admin/users');
    }

    public function news()
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }
        return view('admin/news');
    }

    public function subscriptions()
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }
        return view('admin/subscriptions');
    }

    public function show(int $id)
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }

        $user = User::where('id', $id)->get();
        
        if($user->isEmpty()){
            return redirect()->route('admin.users')->with('denied', "Cette utilisateur n'existe pas !");
        }

        return view('admin/update', [
            'user' => $user[0]
        ]);
    }

    public function update(UpdateUserRequest $request, int $id)
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }

        $user = User::where('id', $id)->get();
        
        if($user->isEmpty()){
            return redirect()->route('admin.users')->with('denied', "Cette utilisateur n'existe pas !");
        }

        if(!$request->password){
            User::where('id', $id)->update([
                'username' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'isAdmin' => $request->setAdmin ? $request->setAdmin : false
            ]);

            return redirect()->route('admin.users')->with('success', "Utilisateur mise à jour !");
        }

        return view('admin/update', [
            'user' => $user[0]
        ]);
    }


    public function delete(int $id)
    {
        $user = User::where('id', $id)->get();

        if($user->isEmpty()){
            return redirect()->route('admin.users')->with('denied', "Cette utilisateur n'existe pas !");
        }
        
        if(User::where('id', $id)->delete()){
            return redirect()->route('admin.users')->with('success', "Utilisateur supprimé !");
        }
    }
}
