<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Episode;

class SmallSeries extends Component
{
    public $series;

    public function mount(Series $series){
        $this->series = $series;
    }

    public function render()
    {
        return view('livewire.ui.small-series');
    }
}
