<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
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
                    'route' => 'home',
                    'icon' => 'fa-solid fa-archway',
                    'active' => true,
                ],

                [
                    'name' => 'Home',
                    'route' => 'home',
                    'icon' => 'fa-solid fa-archway',
                    'active' => false,
                ],

            ],
            'Settings' => [

                [
                    'name' => 'Sign in',
                    'route' => 'login',
                    'icon' => 'fa-solid fa-arrow-right-to-bracket',
                    'active' => false,
                    'auth' => false,
                ],

                [
                    'name' => 'Sign up',
                    'route' => 'register',
                    'icon' => 'fa-solid fa-user-plus',
                    'active' => false,
                    'auth' => false,
                ],
                [
                    'name' => 'Logout',
                    'route' => 'logout',
                    'icon' => 'fa-solid fa-user-plus',
                    'active' => false,
                    'auth' => true,
                ],


            ],
        ];
        $this->tabs=collect($this->tabs);

            $this->tabs=$this->tabs->filter(function ($tab, $key) {
                $tab=collect($tab);
                $tab->filter(function ($item, $key) {
                    $item=collect($item);
                    // if($item->has('auth')){
                    //     if(Auth::check()){
                    //         return $item->get('auth');
                    //     }
                    //     return false;
                    // }
                    return true;
                });
            });
            dd($this->tabs);

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
