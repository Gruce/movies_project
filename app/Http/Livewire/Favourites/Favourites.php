<?php

namespace App\Http\Livewire\Favourites;

use Livewire\Component;
use App\Models\{
    Movie,
    Episode,
};
class Favourites extends Component
{
    protected $listeners = ['favouriteUpdated' => '$refresh'];

    public function render()
    {
        $this->movies = Movie::with('cover')->whereHas('favourites')->get();
        $this->episodes = Episode::with('cover')->whereHas('favourites')->get();
        return view('livewire.favourites.favourites');
    }
}
