<?php

namespace App\Http\Livewire;

use App\Models\Abonnement;
use Livewire\Component;
use Livewire\WithPagination;

class Subscriptions extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.subscriptions',[ 
            'subscriptions' => Abonnement::orderBy('id', 'asc')->paginate(10)
        ]);
    }
}
