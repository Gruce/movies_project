<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class Rating extends Component
{
    public $rating, $listen;

    public function mount($rating){
        $this->rating = round($rating/2);
    }

    public function select($item){
        $this->emit('ratingUpdated', $item);
    }

    public function render()
    {
        return view('livewire.ui.rating');
    }
}
