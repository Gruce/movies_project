<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\{
    Collaboration as CollaborationModel,
    Participant
};

class Collaboration extends Component
{
    public function mount(CollaborationModel $collaboration)
    {
        $this->collaboration = $collaboration;
        // New Participant if not participated
        $this->collaboration->new_participant();
    }

    public function login(){
        return redirect()->route('login');
    }
    public function render()
    {
        $this->participants = $this->collaboration->participants()->orderBy('id', 'desc')->get();

        return view('livewire.series.collaboration');
    }
}
