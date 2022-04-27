<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\{
    Movie,
    Series
};

class Home extends Component
{

    public $type;
    protected $queryString = ['type'];




    public function mount(){
        if($this->type === 'movies'){
            $this->last_movies = Movie::orderBy('id', 'desc')->take(5)->get(['id', 'name', 'rating', 'description']);
        }

        if($this->type === 'series'){
            $this->last_series = Series::orderBy('id', 'desc')->take(5)->get();
        }

        if (!request()->query('type')){
            return redirect()->route('home', ['type' => 'movies']);
        }
    }

    public function render(){
        return view('livewire.home.home',);
    }
}
