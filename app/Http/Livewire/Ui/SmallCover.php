<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;

class SmallCover extends Component
{
    public $name, $rating, $imgUrl, $url, $category;
    public function render()
    {
        return view('livewire.ui.small-cover');
    }
}
