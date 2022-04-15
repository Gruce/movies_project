<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class IconButton extends Component
{
    // public $color;
    // public $default;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public function __construct($color = "primary"){
    //     $this->default = 'text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ';

    //     if ($this->color = $color){  

    //     switch ($this->color){
    //         case "primary":
    //             $this->default .= 'bg-blue-500 hover:bg-blue-800 focus:ring-blue-300';
    //             break;
    //         case "secondary":
    //             $this->default .= 'bg-gray-700 hover:bg-gray-800 focus:ring-gray-300';
    //             break;
    //         case "success":
    //             $this->default .= 'bg-green-700 hover:bg-green-800 focus:ring-green-300';
    //             break;
    //         case "error":
    //             $this->default .= 'bg-red-700 hover:bg-red-800 focus:ring-red-300';
    //             break;
    //         case "warning":
    //             $this->default .= 'bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-200';
    //             break;
    //     }
    //   }
    //     else 
    //         $this->default .= 'bg-red-500 hover:bg-red-800 focus:ring-red-300';  
    // }
    public function __construct($icon = null)
    {
        if ($icon)
            $this->icon = $icon;
        else
            $this->icon = "fa-solid fa-circle-xmark";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.u-i.icon-button');
    }
//     public function render()
//     {
//     return view('components.u-i.button');
//     }
 }