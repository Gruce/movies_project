<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class SmallSeries extends Component
{
    public $name, $rating, $imgUrl, $url, $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $rating, $imgUrl, $url, $category)
    {
        $this->name = $name;
        $this->rating = $rating;
        $this->imgUrl = $imgUrl;
        $this->url = $url;
        $this->category = $category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.small-series');
    }
}
