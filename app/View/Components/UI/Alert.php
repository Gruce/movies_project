<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color;
    public $default;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = "primary"){
        $this->default = 'p-4 mb-4 text-sm  rounded-lg ';

        $this->color = $color;

        switch ($this->color){
            case "primary":
                $this->default .= 'text-blue-700 bg-blue-100';
                break;
            case "secondary":
                $this->default .= 'text-gray-700 bg-gray-100';
                break;
            case "success":
                $this->default .= 'text-green-700 bg-green-100';
                break;
            case "error":
                $this->default .= 'text-red-700 bg-red-100';
                break;
            case "warning":
                $this->default .= 'text-yellow-700 bg-yellow-100';
                break;
        }

    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.alert');
    }
}
