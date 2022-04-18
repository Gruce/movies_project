<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\{
    Episode,
};

class Series extends Component
{
    public function mount(Episode $episode)
    {
        $this->episode = $episode;
    }
    public function watch_later($state){
        $this->episode->queue($state);
        $this->emit('watchLaterUpdated');
    }

    public function favourite($state){
        $this->episode->favourite($state);
        $this->emit('favouriteUpdated');
    }

    public function render()
    {
        return view(
            'livewire.ui.series',);
    }
}
