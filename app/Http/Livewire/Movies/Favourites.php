<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;
use App\Models\Favourite;
class Favourites extends Component
{

    public function render()
    {
        return view('livewire.movies.favourites');
    }
}
