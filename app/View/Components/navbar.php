<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $navs;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->navs = [
            [
                'name' => 'Movies',
                'route' => '#',
                'active' => true,
            ],

            [
                'name' => 'Series',
                'route' => '#',
                'active' => false,
            ],
        ];

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
