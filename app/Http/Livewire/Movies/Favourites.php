<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie
};

class Favourites extends Component
{
    protected $listeners = ['favouriteUpdated' => '$refresh'];

    public function render()
    {
        $this->movies = Movie::with('cover')->whereHas('favourites')->get()->take(3);

        return view('livewire.movies.favourites');
    }
}
