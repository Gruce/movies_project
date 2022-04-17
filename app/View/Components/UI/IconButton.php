<?php
// calling a button use <x-ui.icon-button/>
namespace App\View\Components\UI;

use Illuminate\View\Component;

class IconButton extends Component
{
    public $icon;
    public $default;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = "primary", $icon = null)
    {

        // COLOR PROPERTIES
        $this->default = 'flex items-center justify-center hover:text-white focus:ring-2 focus:outline-none font-medium rounded-full text-sm p-0 text-center inline-flex items-center ';

        if ($this->color = $color) {
            switch ($this->color) {
                case "primary":
                    $this->default .= 'text-red-500 border-red-500 hover:bg-red-500 focus:ring-red-300';
                    break;
                case "secondary":
                    $this->default .= 'text-gray-700 border-gray-700 hover:bg-gray-700 focus:ring-gray-300';
                    break;
                case "success":
                    $this->default .= 'text-green-700 border-green-700 hover:bg-green-800 focus:ring-green-300';
                    break;
                case "error":
                    $this->default .= 'text-red-700 border-red-800 hover:bg-red-800 focus:ring-red-300';
                    break;
                case "warning":
                    $this->default .= 'text-yellow-400 border-yellow-500 hover:bg-yellow-500 focus:ring-yellow-200';
                    break;
                case "light":
                    $this->default .= 'text-white border-gray-600 hover:bg-gray-900 focus:ring-gray-300';
                    break;
                case "light2":
                    $this->default .= 'text-gray-200 border-gray-700 focus:ring-gray-300';
                    break;
            }
        } else $this->default .= 'text-red-500 border-red-500 hover:bg-red-500 focus:ring-red-300';


        //  ICON PROPERTIES
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
}
