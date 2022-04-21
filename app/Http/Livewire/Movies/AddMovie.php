<?php

namespace App\Http\Livewire\Movies;
use App\Models\Genre;
use App\Models\Movie;
use Livewire\WithFileUploads;
use Livewire\Component;

class AddMovie extends Component
{
    use WithFileUploads;

    public $name, $description, $rating, $duration, $release_date, $genre =[], $files=[], $cover, $url_slider;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'rating' => 'required',
        'duration' => 'required',
        'release_date' => 'required',
        'genres' => 'required',
        'cover' => 'required',
        'url_slider' => 'required',
        'files' => 'required',
    ];

    public function add()
    {
        $this->validate();
        $genre_ids = array_keys($this->genre);
        $cover_path = null;

        if($this->cover ){
            $ext = $this->cover->extension();
            $name = \Str::random(10) . '.' . $ext;
            $cover_path = 'movies/covers/' ;
            $this->cover->storeAs('public/' . $cover_path, $name);
            $cover_path .= $name;
        }

        $url_slider_path = null;
        if($this->url_slider ){
            $ext = $this->url_slider->extension();
            $name = \Str::random(10) . '.' . $ext;
            $url_slider_path = 'movies/url_sliders/' ;
            $this->url_slider->storeAs('public/' . $url_slider_path, $name);
            $url_slider_path .= $name;
        }

        $files_path = [];
        if($this->files ){
            foreach ($this->files as $file) {
                $ext = $file->extension();
                $name = \Str::random(10) . '.' . $ext;
                $file_path = 'movies/files/' ;
                $file->storeAs('public/' . $file_path, $name);
                array_push($files_path, $file_path . $name);
            }
        }

        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'rating' => $this->rating,
            'duration' => $this->duration,
            'release_date' => $this->release_date,
            'genres' => $genre_ids,
            'cover' => $cover_path,
            'url_slider' => $url_slider_path,
            'files' => $files_path,
        ];

        $movie = new Movie;
        $movie->add($data);
    }
    public function render()
    {
        $genres = Genre::get();
        return view('livewire.movies.add-movie', [ 'genres' => $genres ] );
    }
}
