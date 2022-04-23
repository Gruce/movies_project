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
    public $search;

    protected $listeners = [
        'ratingUpdated' => 'rating_updated',
        'watchLaterUpdated' => '$refresh',
        'search',
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
    function search($string)
    {
        $this->search = $string;
    }
    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->series = Series::where('name','LIKE',$search)->genre($this->genre_id)

            ->get()
            // Sort by first episode with first season of each series in descending order
            ->sortByDesc(function ($single_series){
                return $single_series->seasons->first()->episodes->first()->likes_count;
            });

        if ($this->rating)
            $this->series = $this->series->where('rating_five', $this->rating);


        $this->genres = Genre::get([
            'id',
            'name'
        ]);
        return view('livewire.series.all');
    }
}
