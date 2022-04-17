<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie,
    Genre
};

class All extends Component
{
    public $genre_id;
    public $rating = null;

    public function render()
    {

        $this->movies = Movie::genre($this->genre_id)->get()->append('likes_count')->sortByDesc('likes_count');

        $this->genres = Genre::get([
            'id',
            'name'
        ]);

        return view('livewire.movies.all');
    }
}
