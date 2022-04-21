<?php

namespace App\Http\Livewire\Movies;
use App\Models\Genre;
use App\Models\Movie;

use Livewire\Component;

class AddMovie extends Component
{
    public $name, $description, $rating, $duration, $release_date, $genre =[];

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'rating' => 'required',
        'duration' => 'required',
        'release_date' => 'required',
    ];

    public function add()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'rating' => $this->rating,
            'duration' => $this->duration,
            'release_date' => $this->release_date,


        ];
        // dd($this->genre);

        $movie = new Movie;
        $movie->add($data);
    }
    public function render()
    {
        $genres = Genre::get();
        return view('livewire.movies.add-movie', [ 'genres' => $genres ] );
    }
}
