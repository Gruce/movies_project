<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Movie as MovieModel;

class Movie extends Component
{
    public function mount(MovieModel $movie){
        $this->movie = $movie;
    }

    public function watch_later(){
        
    }

    public function favourite($state){
        $this->movie->favourite($state);
    }

    public function render()
    {
        return view('livewire.ui.movie');
    }
}
