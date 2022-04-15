<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class Movie extends Component
{
    public $name, $rating, $imgUrl, $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $rating, $imgUrl, $url)
    {
        $this->name = $name;
        $this->rating = $rating;
        $this->imgUrl = $imgUrl;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.movie');
    }
}
