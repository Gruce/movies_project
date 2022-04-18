<?php

namespace App\Http\Livewire\Ui;

use Livewire\Component;
use App\Models\Series as SeriesModel;
class Series extends Component
{
    public $name, $rating, $imgUrl, $url;

    public function render()
    {
        $series = SeriesModel::get();
        return view('livewire.ui.series', [
            'series' => $series
        ]);

    }
}
