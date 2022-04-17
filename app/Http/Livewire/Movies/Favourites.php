<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie
};

class Favourites extends Component
{
    public function render()
    {

        $this->movies = Movie::with('cover')->whereHas('favourites')->get();

        return view('livewire.movies.favourites');
    }
}
