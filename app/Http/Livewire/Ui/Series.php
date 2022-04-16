<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class Series extends Component
{
    public $name, $rating, $imgUrl, $url;

    public function mount($rating){
        $this->rating = round($rating/2);
    }

    public function render()
    {
        return view('livewire.ui.series');
    }
}
