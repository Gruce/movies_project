<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Episode;

class SmallSeries extends Component
{
    public $episode;

    protected $listeners = [
        'watchLaterUpdated' => '$refresh',
    ];

    public function mount(Episode $episode){
        $this->episode = $episode;
    }

    public function watch_later($state){
        $this->episode->queue($state);
        $this->emit('watchLaterUpdated');
    }

    public function render()
    {
        return view('livewire.ui.small-series');
    }
}
