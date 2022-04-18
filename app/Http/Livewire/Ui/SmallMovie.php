<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Movie;

class SmallMovie extends Component
{
    public $movie;
    protected $listeners = ['$refresh'];

    public function mount(Movie $movie){
        $this->movie = $movie;
    }
    public function watch_later($state){
        $this->movie->queue($state);
        $this->emit('$refresh');
    }

    public function render()
    {
        return view('livewire.ui.small-movie');
    }
}
