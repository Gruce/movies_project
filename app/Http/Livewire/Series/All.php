<?php

namespace App\Http\Livewire\Series;

use Livewire\Component;
use App\Models\{
    Series,
    Genre,
};

class All extends Component
{
    public $genre_id;
    public $genre_name = 'All Genres';
    public $rating = null;

    protected $listeners = [
        'ratingUpdated' => 'rating_updated',
        'watchLaterUpdated' => '$refresh',
    ];

    public function rating_updated($item)
    {
        if ($item == $this->rating)
            $this->rating = null;
        else
            $this->rating = $item;
    }

    public function select_genres($genre_id = null, $genre_name = 'All Genres')
    {
        $this->genre_id = $genre_id;
        $this->genre_name = $genre_name;
    }
    public function render()
    {
        $this->series = Series::get();

        $this->genres = Genre::get([
            'id',
            'name'
        ]);
        return view('livewire.series.all');
    }
}
