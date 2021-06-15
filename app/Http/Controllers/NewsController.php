<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('published_at', '<=', Carbon::now())->orderBy('published_at', 'asc')->get();
        return view('articles/news', [
            'news' => $news
        ]);
    }

    public function show(int $id)
    {
        try {
            $article = News::where('id', $id)->get();
            if ($article->isEmpty()) {
                return redirect()->route('news')->with('denied', "L'article demandé n'existe pas !");
            }
            return view('articles/article', [
                'article' => $article
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('news')->with('denied', "L'article demandé n'existe pas !");
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        if (!$query) {
            return redirect(url()->previous());
        }
        
        $news = News::where('title', 'LIKE', "%{$query}%")->orWhere('body', 'LIKE', "%{$query}%")->get();

        return view('articles/news', [
            'news' => $news
        ]);
    }

    //API CONTROLLER HERE

    public function apiNews()
    {
        $news = News::where('published_at', '<=', Carbon::now())->orderBy('published_at', 'asc')->get();
        return response()->json([
            'success' => true, 
            $news
        ], 200);
    }

    public function apiShow(int $id)
    {
        try {
            $article = News::where('id', $id)->get();
            if ($article->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => "L'article demandé n'existe pas !"
                ], 404);
            }
            return response()->json([
                'success' => true,
                'article' => $article
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => "L'article demandé n'existe pas !"
            ], 404);
        }     
    }
}
