<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Http;

class AdminNewsController extends Controller
{
    public function news()
    {
        if (!Auth::user()->isAdmin) {
            return redirect()->route('home')->with('denied', "Vous n'avez pas l'autorisation d'entrer sur cette page !");
        }
        return view('admin/news');
    }

    public function show(int $id)
    {
        $article = News::where('id', $id)->get();
        return view('admin/updateNews', [
            'article' => $article[0]
        ]);
    }
    
    public function update(NewsRequest $request, int $id)
    {
        $article = News::where('id', $id)->get();
        $response = $request->img->storeOnCloudinary();
        dd($response);
    }

    public function delete(int $id)
    {
        $article = News::where('id', $id)->get();

        if($article->isEmpty()){
            return redirect()->route('admin.news')->with('denied', "Cet article n'existe pas !");
        }
        
        if(News::where('id', $id)->delete()){
            return redirect()->route('admin.news')->with('success', "Article supprimé !");
        }
    }
}
