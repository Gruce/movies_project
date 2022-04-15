<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class Home extends Component
{

    public $type = 'movies';
    protected $queryString = ['type'];

    public function render(){
        return view('livewire.home.home');
    }
}
