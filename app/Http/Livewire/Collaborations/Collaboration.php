<?php

namespace App\Http\Livewire\Collaborations;

use Livewire\Component;
use App\Models\{
    Movie,
    Episode,
    Participant as ParticipantModel,
    Collaboration as CollaborationModel,
};


class Collaboration extends Component {

    public $search;
    protected $listeners = ['collaborationUpdate' => '$refresh', 'search'];

    function search($string)
    {
        $this->search = $string;
    }

    public function mount( CollaborationModel $collaboration , ParticipantModel $participant)
    {
        // $search = '%' . $this->search . '%';
        $this->collaborations = $collaboration->where('public', true)->get();

        // $this->participants = $participant->where('user_id')->get();
        // dd($participants->user_id);
        
        // ->where('name','LIKE',$search)

    }

    public function render()
    {

        return view('livewire.collaborations.collaboration');
    }
}
