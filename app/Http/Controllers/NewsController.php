<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('updated_at', '<=', Carbon::now())->orderBy('updated_at', 'asc')->get();
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
}
