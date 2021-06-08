<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsSlider extends Component
{
    public function render()
    {
        $news = News::where('published', true)->latest()->take(5)->orderBy('id')->get();
        return view('livewire.news-slider', [
            'news' => $news
        ]);
    }
}
