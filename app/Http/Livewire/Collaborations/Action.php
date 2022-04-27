<?php

namespace App\Http\Livewire\Collaborations;

use Livewire\Component;
use App\Models\Collaboration as CollaborationModel;
class Action extends Component
{
    protected $rules = [
        'collaboration.public' => 'required',
    ];

    public function mount(CollaborationModel $collaboration){
        $this->collaboration = $collaboration;
    }

    public function updatedCollaborationPublic(){
        $this->collaboration->save();
    }

    public function render(){
        return view('livewire.collaborations.action');
    }
}
