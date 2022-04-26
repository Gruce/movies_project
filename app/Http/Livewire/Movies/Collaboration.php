<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Collaboration as CollaborationModel;

class Collaboration extends Component
{
    public function mount(CollaborationModel $collaboration)
    {
        $this->collaboration = $collaboration;
        $this->participants = $this->collaboration->participants->first();
        if($this->participants){
            // dd('okk');
            if(!$this->participants->where('user_id', auth()->id())->exists()){
                $this->participants->create([
                    'user_id' => auth()->id(),
                    'collaboration_id' => $this->collaboration->id
                ]);
            }
        }
    }

    public function render()
    {
        return view('livewire.movies.collaboration');
    }
}
