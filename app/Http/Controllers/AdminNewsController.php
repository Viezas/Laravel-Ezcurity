<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
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

    public function showCreate()
    {
        return view('admin/createNews');
    }

    public function create(NewsCreateRequest $request)
    {
        $result = $request->img->storeOnCloudinary();
        News::create([
            'title' => $request->title,
            'body' => $request->body,
            'img_url' => $result->getSecurePath(),
            'img_id' => $result->getPublicId(),
            'published' => $request->publish == "true" ? true : false,
            'published_at' => $request->published,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('admin.news')->with('success', "Article crée !");
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
        $activatedNews = News::where('published', true)->get();
        if (!$request->img) {
            News::where('id', $id)->update([
                'title' => $request->title,
                'body' => $request->body,
                'published' => $request->publish == "true" || count($activatedNews) < 6 ? true : false,
                'published_at' => count($activatedNews) < 6 ? $article[0]->published_at : $request->published
            ]);
        }
        else{
            $result  = $request->img->storeOnCloudinary();
            News::where('id', $id)->update([
                'title' => $request->title,
                'body' => $request->body,
                'img_url' => $result->getSecurePath(),
                'img_id' => $result->getPublicId(),
                'published' => $request->publish == "true" || count($activatedNews) < 5 ? true : false,
                'published_at' => count($activatedNews) < 6 ? $article[0]->published_at : $request->published
            ]);
        }
        return redirect()->route('admin.news')->with('success', "Article modifié !");
    }

    public function delete(int $id)
    {
        $article = News::where('id', $id)->get();
        $activatedNews = News::where('published', true)->get();

        if($article->isEmpty()){
            return redirect()->route('admin.news')->with('denied', "Cet article n'existe pas !");
        }

        if (count($activatedNews) < 6) {
            return redirect()->route('admin.news')->with('denied', "Impossible de supprimer cette article car il doit y en avoir 5 minimum !");
        }
        
        $result = cloudinary()->destroy($article[0]->img_id);
        News::where('id', $id)->delete();
        return redirect()->route('admin.news')->with('success', "Article supprimé !");
        
    }
}
