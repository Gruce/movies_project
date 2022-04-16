<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;
class Show extends Component
{
    public function mount(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function like()
    {
        $this->movie->like();
    }

    public function dislike()
    {
        $this->movie->dislike();
    }

    public function render()
    {
        return view('livewire.movies.show');
    }
}
