<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Movie;
class Home extends Component
{

    public $type;
    protected $queryString = ['type'];

    public function mount(){
        if (!request()->query('type')){
            return redirect()->route('home', ['type' => 'movies']);
        }
    }

    public function render(){
        return view('livewire.home.home',);
    }
}
