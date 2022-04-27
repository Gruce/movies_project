<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\{
    Movie,
    Collaboration
};

class Show extends Component
{
    public $comment, $collaboration;

    public $showDarkScreen = true;

    protected $listeners = [
        'watchLaterUpdated' => '$refresh',
    ];

    public function mount(Movie $movie, $room = null)
    {
        $this->movie = $movie;
        if ($room)
            $this->collaboration = Collaboration::where('room', $room)->first();
    }

    public function like($type)
    {
        $this->movie->like($type);
        $this->emit('likesUpdated');
    }

    public function watch_later($state)
    {
        $this->movie->queue($state);
        $this->emit('watchLaterUpdated');
    }

    public function favourite($state)
    {
        $this->movie->favourite($state);
        $this->emit('favouriteUpdated');
    }

    public function collaborate()
    {
        $collaboration = $this->movie->collaborate();
        $this->emit('collaborateUpdate');
        return redirect()->route('movie-show', [
            'movie' => $this->movie->id,
            'room' => $collaboration->room
        ]);
    }

    public function render()
    {
        return view('livewire.movies.show');
    }
}
