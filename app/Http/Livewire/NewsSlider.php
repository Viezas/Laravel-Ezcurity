<?php

namespace App\Http\Livewire;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Component;

class NewsSlider extends Component
{
    public function render()
    {
        $news = News::where('published', true)->where('updated_at', '<=', Carbon::now())->latest()->take(5)->orderBy('id')->get();
        return view('livewire.news-slider', [
            'news' => $news
        ]);
    }
}
