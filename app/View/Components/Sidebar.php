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
            new Tab (
                'Menu', [
                    new TabItem('Home', 'fa-solid fa-archway', 'home', true),
                    new TabItem('Home', 'fa-solid fa-archway', 'home'),
                ]
            ),
            new Tab (
                'Settings', [
                    new TabItem('Sign in', 'fa-solid fa-arrow-right-to-bracket', 'login', false, false),
                    new TabItem('Sign up', 'fa-solid fa-user-plus', 'register', false, false),
                    new TabItem('Sign out', 'fa-solid fa-user-plus', 'logout', false, true),
                ]
            ),
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

class Tab {
    public $title;
    public $items;
    public function __construct($title, $items){
        $this->title = $title;
        $this->items = collect($items)->filter(function($item){
            if (isset($item->auth))
                return $item->auth == Auth::check();
            return true;
        })->all();
    }
}

class TabItem {
    public $title;
    public $icon;
    public $route;
    public $active;
    public $auth;

    public function __construct($title = 'Tab Item', $icon = 'fa-solid fa-archway', $route = 'home', $active = false, $auth = null){
        $this->title = $title;
        $this->icon = $icon;
        $this->route = $route;
        $this->active = $active;
        $this->auth = $auth;
    }
}
