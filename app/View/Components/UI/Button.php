<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Button extends Component
{

    public $color;
    public $default;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = "primary"){
        $this->default = 'text-white focus:ring-4 font-medium hover:scale-110 text-sm rounded-lg px-5 py-2.5 focus:outline-none ';

        if ($this->color = $color){  

        switch ($this->color){
            case "primary":
                $this->default .= 'bg-blue-500 hover:bg-blue-800 focus:ring-blue-300';
                break;
            case "secondary":
                $this->default .= 'bg-gray-700 hover:bg-gray-800 focus:ring-gray-300';
                break;
            case "success":
                $this->default .= 'bg-green-700 hover:bg-green-800 focus:ring-green-300';
                break;
            case "error":
                $this->default .= 'bg-red-700 hover:bg-red-800 focus:ring-red-300';
                break;
            case "warning":
                $this->default .= 'bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-200';
                break;
            case "light":
                $this->default .= 'text-white bg-gray-600 border-gray-700 hover:bg-gray-900 focus:ring-gray-300';
                break;
            case "light2":
                $this->default .= 'text-gray-200 bg-gray-400 border-gray-600 hover:bg-gray-700 focus:ring-gray-300';
                break;
        }
      }
        else 
            $this->default .= 'bg-red-500 hover:bg-red-800 focus:ring-red-300';  
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.button');
    }
}
