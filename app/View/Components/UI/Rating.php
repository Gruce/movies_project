<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Rating extends Component
{
    public $rating;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rating)
    {
        $this->rating = round($rating/2);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.rating');
    }
}
