<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;
class Similar extends Component
{
    public function mount($movie_id){
        $movie=Movie::findOrFail($movie_id);
        $this->movies = Movie::whereHas('genres', function ($query)use($movie,$movie_id) {
            $query->where('movie_id','!=',$movie_id)->whereIn('genre_id', $movie->genres->pluck('id'));
        })->orderBy('rating', 'desc')->take(5)->get();
    }
    public function render()
    {
        return view('livewire.movies.similar');
    }
}