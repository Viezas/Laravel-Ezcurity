<?php

namespace App\Http\Livewire;

use App\Models\News as ModelsNews;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.news', [
            'news' => ModelsNews::orderBy('id', 'asc')->paginate(10)
        ]);
    }
}
