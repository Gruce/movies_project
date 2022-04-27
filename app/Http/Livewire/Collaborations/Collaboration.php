<?php

namespace App\Http\Livewire\Collaborations;

use Livewire\Component;
use App\Models\{
    Movie,
    Episode,
    Participant,
    Collaboration as CollaborationModel,
};

class Collaboration extends Component
{
    protected $listeners = ['collaborationUpdate' => '$refresh'];

    public function mount(CollaborationModel $collaboration){
        $this->collaboration = $collaboration;
    }
    public function render()
    {
        // $this->movies = Movie::with('cover')->whereHas('collaborations')->get();
        // $this->collaborations = Collaboration::with('room')->whereHas('collaborations')->get();
        // $this->participants = Participant::with('user_id')->whereHas('participants')->get();
        return view('livewire.collaborations.collaboration');
    }
}