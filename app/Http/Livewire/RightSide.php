<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;
use App\Models\Series;
class RightSide extends Component
{
    public function render(){
        $this->series = Series::get()->take(3);
        return view('livewire.right-side');
    }
}
