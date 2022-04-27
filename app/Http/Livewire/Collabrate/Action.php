<?php

namespace App\Http\Livewire\Collabrate;

use Livewire\Component;
use App\Models\Collaboration as CollaborationModel;
class Action extends Component
{
    public function mount(CollaborationModel $collaboration)
    {
        $this->collaboration = $collaboration;

    }
    public function action() {
        $this->collaboration->public = !$this->collaboration->public;
        $this->collaboration->save();

    }

    public function render()
    {
        return view('livewire.collabrate.action');
    }
}
