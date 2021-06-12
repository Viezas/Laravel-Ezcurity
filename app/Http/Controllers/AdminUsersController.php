<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    public function index()
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }
        return view('admin/users');
    }

    public function show(int $id)
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }

        $user = User::where('id', $id)->get();
        
        if($user->isEmpty()){
            return redirect()->route('admin.users')->with('denied', "Cet utilisateur n'existe pas !");
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
        
        if($user[0]->isAdmin && $user[0]->id != Auth::user()->id){
            return redirect()->route('admin.users')->with('denied', "Vous n'avez pas le droit de modifier un autre admin !");
        }
        
        if($user->isEmpty()){
            return redirect()->route('admin.users')->with('denied', "Cet utilisateur n'existe pas !");
        }

        if(!$request->password){
            User::where('id', $id)->update([
                'username' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'isAdmin' => $request->setAdmin == "true" && $user[0]->isAdmin == false ? true : true
            ]);

            return redirect()->route('admin.users')->with('success', "Utilisateur mise à jour !");
        }

        User::where('id', $id)->update([
                'username' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'isAdmin' => $request->setAdmin == "true" && $user[0]->isAdmin == false ? true : true
            ]);

        return redirect()->route('admin.users')->with('success', "Utilisateur mise à jour !");
    }

    public function delete(int $id)
    {
        $user = User::where('id', $id)->get();

        if($user->isEmpty()){
            return redirect()->route('admin.users')->with('denied', "Cet utilisateur n'existe pas !");
        }
        
        if(User::where('id', $id)->delete()){
            return redirect()->route('admin.users')->with('success', "Utilisateur supprimé !");
        }
    }
}
