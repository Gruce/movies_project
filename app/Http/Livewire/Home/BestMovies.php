<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Movie;

class BestMovies extends Component
{

    protected $listeners = ['search'];

    public $search;
    
    function search($string)
    {
        $this->search = $string;
    }

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->movies = Movie::where('name','LIKE',$search)->with('cover')->orderBy('rating', 'desc')->take(10)->get();

        return view('livewire.home.best-movies');
    }
}
