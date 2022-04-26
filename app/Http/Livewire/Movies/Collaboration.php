<?php

namespace App\Http\Livewire\Movies;

use Livewire\Component;
use App\Models\Collaboration as CollaborationModel;

class Collaboration extends Component
{
   
    public function mount(CollaborationModel $collaboration)
    {
        $this->collaboration = $collaboration;
        $this->participants = $this->collaboration->participants();

        if (auth()->check()) {
            if (!$this->participants->where('user_id', auth()->id())->first()) {
                $this->participants->create([
                    'user_id' => auth()->id(),
                    'collaboration_id' => $this->collaboration->id
                ]);
            }
        }
        $this->participants = $this->participants->get();
    }

    public function login()
    {
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.movies.collaboration');
    }
}
