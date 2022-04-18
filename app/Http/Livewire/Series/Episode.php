<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\Episode as EpisodeModel;


class Episode extends Component
{
    public $episode;

    public function mount(EpisodeModel $episode){
        $this->episode = $episode;
    }

    public function render()
    {
        return view('livewire.series.episode');
    }
}
