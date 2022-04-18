<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie,
};
class PopularMovies extends Component
{
    public function render()
    {
        $this->movies = Movie::get()->take(3);
        return view('livewire.movies.popular-movies');
    }
}
