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
    public $genre_name = 'All Genres';
    public $rating = null;

    protected $listeners = [
        'ratingUpdated' => 'rating_updated',
        'watchLaterUpdated' => '$refresh',
    ];

    public function rating_updated($item){
        if ($item == $this->rating)
            $this->rating = null;
        else
            $this->rating = $item;
    }

    public function select_genres($genre_id = null, $genre_name = 'All Genres'){
        $this->genre_id = $genre_id;
        $this->genre_name = $genre_name;
    }

    public function render()
    {

        $this->movies = Movie::genre($this->genre_id)

                                ->get()
                                ->append('likes_count')->sortByDesc('likes_count');

        if ($this->rating)
            $this->movies = $this->movies->where('rating_five', $this->rating);


        $this->genres = Genre::get([
            'id',
            'name'
        ]);

        return view('livewire.movies.all');
    }
}
