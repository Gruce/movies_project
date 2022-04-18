<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\{
    Episode,
};
class Favourites extends Component
{
    protected $listeners = ['favouriteUpdated' => '$refresh'];

    public function render()
    {
        $this->episodes = Episode::with('cover')->whereHas('favourites')->get()->take(3);
        return view('livewire.series.favourites');
    }
}
