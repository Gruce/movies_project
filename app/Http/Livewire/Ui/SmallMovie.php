<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Movie;

class SmallMovie extends Component
{
    public $movie;

    public function mount(Movie $movie){
        $this->movie = $movie;
    }

    public function render()
    {
        return view('livewire.ui.small-movie');
    }
}
