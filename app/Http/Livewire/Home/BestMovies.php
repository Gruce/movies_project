<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Movie;

class BestMovies extends Component
{
    public function render()
    {
        $this->movies = Movie::with('cover')->orderBy('rating', 'desc')->take(10)->get();

        return view('livewire.home.best-movies');
    }
}
