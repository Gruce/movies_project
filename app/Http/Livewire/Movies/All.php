<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;

class All extends Component
{
    public function render(){
        $this->movies = Movie::get()->append('likes_count')->sortByDesc('likes_count');
        return view('livewire.movies.all');
    }
}
