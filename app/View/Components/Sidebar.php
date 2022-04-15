<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $tabs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->tabs = [
            'Menu' => [
                [
                    'name' => 'Home',
                    'route' => '#',
                    'icon' => 'fa-solid fa-archway',
                    'active' => true,
                ],

                [
                    'name' => 'Home',
                    'route' => '#',
                    'icon' => 'fa-solid fa-archway',
                    'active' => false,

                ],

            ],
            'Settings' => [

                [
                    'name' => 'Sign in',
                    'route' => '#',
                    'icon' => 'fa-solid fa-arrow-right-to-bracket',
                    'active' => false,
                ],

                [
                    'name' => 'Sign up',
                    'route' => '#',
                    'icon' => 'fa-solid fa-user-plus',
                    'active' => false,

                ],

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
        return view('components.sidebar');
    }
}
