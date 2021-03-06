<?php

namespace App\Http\Livewire\Movies;
use App\Models\{
    Genre,
    Movie,
    File,
    Cover,
};
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Traits\MovieTrait;

class AddMovie extends Component
{
    use WithFileUploads;
    use MovieTrait;

    protected $rules = [
        'movie.name' => 'required',
        'movie.description' => 'required',
        'movie.rating' => 'required',
        'movie.duration' => 'required',
        'movie.release_date' => 'required',
        'movie.imdb' => 'required',
        'files.*' => 'required|file',
        'url' => 'required|image',
        'url_slider' => 'required|image',
        'genres.*' => 'required',
    ];

    public function mount(){
        $this->movie = new Movie;
        $this->url = null;
        $this->url_slider = null;
        $this->genres = [];
        $this->files = [];
    }

    public function add(){
        $this->validate();
        
        // Getting Movie Data
        $data = array_filter($this->movie->toArray());
        
        // Getting Cover Data
        $data['cover'] = $this->uploadCoverPath($this->url);
        $data['url_slider'] = $this->uploadSliderPath($this->url_slider);

        // Getting Files Data
        $data['files'] = $this->uploadFilesPaths($this->files);

        // Getting Genres Data
        $data['genres'] = array_filter($this->genres);

        $this->movie->add($data);
    }

    public function render()
    {
        $all_genres = Genre::get();

        $this->movie->cover_url = $this->url ? $this->url->temporaryUrl() : null;

        return view('livewire.movies.add-movie', [ 'all_genres' => $all_genres ] );
    }
}
