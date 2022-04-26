<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Collaboration as CollaborationModel;

class Collaboration extends Component
{
    public function mount(CollaborationModel $collaboration)
    {
        $this->collaboration = $collaboration;
        // dd($this->collaboration->user);
    }

    public function render()
    {
        return view('livewire.movies.collaboration');
    }
}
