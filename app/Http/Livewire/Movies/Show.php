<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Movie;

class Show extends Component
{
    public $comment;

    public $showDarkScreen = true;

    protected $listeners = [
        'watchLaterUpdated' => '$refresh',
    ];

    public function mount(Movie $movie)
    {
        $this->movie = $movie;
    }

    public function like($type)
    {
        $this->movie->like($type);
        $this->emit('likesUpdated');
    }

    public function watch_later($state){
        $this->movie->queue($state);
        $this->emit('watchLaterUpdated');
    }

    public function favourite($state){
        $this->movie->favourite($state);
        $this->emit('favouriteUpdated');
    }

    public function comment()
    {
        $this->movie->comment($this->comment);
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.movies.show');
    }
}
