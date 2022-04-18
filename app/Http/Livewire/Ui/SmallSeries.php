<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Episode;

class SmallSeries extends Component
{
    public $episode;

    public function mount(Episode $episode){
        $this->episode = $episode;
    }

    public function render()
    {
        return view('livewire.ui.small-series');
    }
}
