<?php

namespace App\Http\Livewire\Movies;
use App\Models\{
    Genre,
    Movie,
    File,
    Cover
};
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Traits\MovieTrait;

class AddMovie extends Component
{
    use WithFileUploads;
    use MovieTrait;

    public $cover, $genres, $files;

    protected $rules = [
        'movie.name' => 'required',
        'movie.description' => 'required',
        'movie.rating' => 'required',
        'movie.duration' => 'required',
        'movie.release_date' => 'required',
        'files.*' => 'required',
        'cover.url' => 'required|image',
        'cover.url_slider' => 'required|image',
        'genres.*' => 'required',
    ];

    public function mount(){
        $this->movie = new Movie;
    }

    public function add(){
        $this->validate();

        // Getting Movie Data
        $data = array_filter($this->movie->toArray());

        // Remove unchecked genres
        $this->genres = array_filter($this->genres);

        // Getting Cover Data
        $data['cover'] = $this->uploadCoverPath($this->cover['url']);
        $data['url_slider'] = $this->uploadSliderPath($this->cover['url_slider']);

        // Getting Files Data
        $data['files'] = $this->uploadFilesPaths($this->files);

        // Getting Genres Data
        $data['genres'] = $this->genres;

        $this->movie->add($data);
    }

    public function render()
    {
        $all_genres = Genre::get();
        return view('livewire.movies.add-movie', [ 'all_genres' => $all_genres ] );
    }
}
