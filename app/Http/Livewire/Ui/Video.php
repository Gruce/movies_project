<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\File;

class Video extends Component
{
    public function mount(File $file){
        $this->file = $file;
    }
    public function render()
    {
        return view('livewire.ui.video');
    }
}
