<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie,
};
class PopularMovies extends Component
{
    protected $listeners = ['likesUpdated' => '$refresh'];
    
    public function render()
    {
        $this->movies = Movie::get()->append('likes_count')->sortByDesc('likes_count')->take(3);

        return view('livewire.movies.popular-movies');
    }
}
