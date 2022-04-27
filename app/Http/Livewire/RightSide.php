<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{
    Movie,
    Collaboration,
    Series
};
class RightSide extends Component
{
    public function render(){
        $this->series = Series::get()->take(3);
        $this->movie = Movie::inRandomOrder()->first();
        $this->collaborations = Collaboration::public()->inRandomOrder()->take(3)->get();

        return view('livewire.right-side');
    }
}
