<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie,
    Genre
};

class All extends Component
{
    // public $genre_id=null;

    public function render(){

        $genre_id=2;
        // if($genre_id) dd($genre_id);
        $this->movies = Movie::with(
        [
            'genres'=>function($genre) use($genre_id){
                $genre->where('id',$genre_id)->select('id','name');
            },

        ]
        )->get()->append('likes_count')->sortByDesc('likes_count');
       dd($this->movies->toArray());
        $this->genres= Genre::get([
            'id',
            'name'
        ]);
        return view('livewire.movies.all');
    }
}
