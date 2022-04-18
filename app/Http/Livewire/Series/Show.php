<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\Series;
use App\Models\Episode;

class Show extends Component
{
    public function mount(Episode $episode)
    {
        $this->episode = $episode;
        // dd($this->episode->toArray());
    }

    public function like($type)
    {
        $this->episode->like($type);
        $this->emit('likesUpdated');
    }

    public function render()
    {
        return view('livewire.series.show');
    }
}
