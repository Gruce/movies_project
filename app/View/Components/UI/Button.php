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
        $this->default = 'text-white focus:ring-4 font-medium text-sm transition ease-in-out delay-100 rounded-lg px-5 py-2.5 focus:outline-none hover:-translate-y-1 hover:scale-110 ';

        if ($this->color = $color){  

        switch ($this->color){
            case "primary":
                $this->default .= 'bg-blue-500 hover:bg-blue-800 duration-300 focus:ring-blue-300';
                break;
            case "secondary":
                $this->default .= 'bg-gray-700 hover:bg-gray-800 duration-300 focus:ring-gray-300';
                break;
            case "success":
                $this->default .= 'bg-green-700 hover:bg-green-800 duration-300 focus:ring-green-300';
                break;
            case "error":
                $this->default .= 'bg-red-700 hover:bg-red-800 duration-300 focus:ring-red-300';
                break;
            case "warning":
                $this->default .= 'bg-yellow-400 hover:bg-yellow-600 duration-300 focus:ring-yellow-300';
                break;
            case "light":
                $this->default .= 'text-white bg-gray-600 hover:bg-gray-500 duration-300 focus:ring-gray-300';
                break;
            case "light2":
                $this->default .= 'text-gray-200 bg-gray-400 hover:bg-gray-400 duration-300 focus:ring-gray-300';
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
