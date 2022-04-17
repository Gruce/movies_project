<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Episode;

class SmallSeries extends Component
{
    public $series, $imgUrl,$name,$category,$rating ;

    // public function mount(Series $series){
    //     $this->series = $series;
    //     // dd($series);
    // }

    public function render()
    {
        return view('livewire.ui.small-series');
    }
}
