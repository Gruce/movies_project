<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class Series extends Component
{
    public $name, $rating, $imgUrl, $url;

    public function render()
    {
        return view('livewire.ui.series');
    }
}
