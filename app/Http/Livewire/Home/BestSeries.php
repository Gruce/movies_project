<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Series;

class BestSeries extends Component
{
    public function render()
    {
        $this->series = Series::get();

        return view('livewire.home.best-series');
    }
}
