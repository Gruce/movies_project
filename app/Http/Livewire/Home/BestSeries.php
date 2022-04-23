<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Series;

class BestSeries extends Component
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
        $this->series = Series::where('name','LIKE',$search)->orderBy('rating', 'desc')->take(10)->get();

        return view('livewire.home.best-series');
    }
}
