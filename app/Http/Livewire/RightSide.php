<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;

class RightSide extends Component
{
    public function render(){
        $this->movies = Movie::get()->take(3);

        return view('livewire.right-side');
    }
}
