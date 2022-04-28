<?php

namespace App\Http\Livewire\Collaborations;

use Livewire\Component;
use App\Models\{
    Movie,
    Episode,
    Participant,
    Collaboration as CollaborationModel,
};


class Collaboration extends Component {

    public $search;
    protected $listeners = ['collaborationUpdate' => '$refresh', 'search'];

    function search($string)
    {
        $this->search = $string;
    }

    public function mount( CollaborationModel $collaboration )
    {
        // $search = '%' . $this->search . '%';
        $this->collaborations = $collaboration->where('public', true)->get();
        // ->where('name','LIKE',$search)

    }

    public function render()
    {

        return view('livewire.collaborations.collaboration');
    }
}
