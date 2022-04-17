<?php

namespace App\Http\Livewire\Favourites;

use Livewire\Component;
use App\Models\{
    Movie
};
class Favourites extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function render()
    {
        $this->movies = Movie::with('cover')->whereHas('favourites')->get();
        return view('livewire.favourites.favourites');
    }
}
