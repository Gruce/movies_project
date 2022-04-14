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
            $this->default = 'text-white focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ';
    
            $this->color = $color;
    
            switch ($this->color){
                case "primary":
                    $this->default .= 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg';
                    break;
                case "secondary":
                    $this->default .= 'p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg';
                    break;
                case "success":
                    $this->default .= 'p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg';
                    break;
                case "error":
                    $this->default .= 'p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg ';
                    break;
                case "warning":
                    $this->default .= 'p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg';
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
