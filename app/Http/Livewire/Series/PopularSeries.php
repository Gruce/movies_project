<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\{
    Series,
};

class PopularSeries extends Component
{
    protected $listeners = ['likesUpdated' => '$refresh'];

    public function render()
    {
        $this->series = Series::get()
                        ->sortByDesc(function ($single_series){
                            return $single_series->seasons->first()->episodes->first()->likes_count;
                        })->take(3);

        return view('livewire.series.popular-series');
    }
}
