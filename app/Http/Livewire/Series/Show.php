<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\Series;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Collaboration;

class Show extends Component
{
    public $comment, $collaboration ;
    public $season_id = null;

    protected $listeners = [
        'watchLaterUpdated' => '$refresh',
    ];

    public function mount(Episode $episode, $room = null)
    {
        $this->episode = $episode;
        if ($room)
            $this->collaboration = Collaboration::where('room', $room)->first();

    }

    public function like($type)
    {
        $this->episode->like($type);
        $this->emit('likesUpdated');
    }

    public function watch_later($state){
        $this->episode->queue($state);
        $this->emit('watchLaterUpdated');
    }

    public function favourite($state){
        $this->episode->favourite($state);
        $this->emit('favouriteUpdated');
    }
    public function comment()
    {
        $this->episode->comment($this->comment);
        $this->comment = '';
    }
    public function collaborate()
    {
        $collaboration = $this->episode->collaborate();
        $this->emit('collaborateUpdate');
        return redirect()->route('series-show', [
            'episode' => $this->episode->id,
            'room' => $collaboration->room
        ]);
    }

    public function render()
    {
        $this->seasons = Series::where('id', $this->episode->season->series->id)->first()->seasons;
        $this->season_id = $this->seasons->first()->id;

        return view('livewire.series.show');
    }
}
