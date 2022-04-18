<?php

namespace App\Http\Livewire\WatchLater;

use Livewire\Component;
use App\Models\{
    Movie
};

class All extends Component
{
    protected $listeners = [
        'watchLaterUpdated' => '$refresh'
    ];

    public function render()
    {
        $this->movies = Movie::whereHas('queues')->get();
        return view('livewire.watch-later.all');
    }
}
