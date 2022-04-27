<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
            new Tab(
                'Menu',
                [
                    new TabItem('Home', 'fa-solid fa-home', 'home'),
                    new TabItem('Movies', 'fa-solid fa-film', 'movies-all'),
                    new TabItem('Series', 'fa-solid fa-tv', 'series-all'),
                    new TabItem('Favourites', 'fa-solid fa-heart', 'favourites', true),
                    new TabItem('Watch Later', 'fa-solid fa-clock', 'watch-later-all', true),
                    new TabItem('Watch together', 'fa-solid fa-users', 'collaboration', true),
                ]
            ),
            new Tab(
                'Managements',
                [
                    new TabItem('Add Movie', 'fa-solid fa-circle-plus', 'add-movie', true),
                    new TabItem('Add Series', 'fa-solid fa-circle-plus', 'add-series', true),
                ],
                true
            ),
            new Tab(
                'Settings',
                [
                    new TabItem('Sign in', 'fa-solid fa-right-to-bracket', 'login', false),
                    new TabItem('Sign up', 'fa-solid fa-user-plus', 'register', false),
                    new TabItem('Sign out', 'fa-solid fa-user-minus', 'logout-get', true),
                ]
            ),
        ];
        
        $this->tabs = collect($this->tabs);
        $this->tabs = $this->tabs->filter(function ($tab) {
            if ($tab->forAdmin){
                if (auth()->user())
                    return auth()->user()->is_admin;
                else return false;
            }
            return true;
        })->toArray();
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

class Tab
{
    public $title;
    public $items;
    public $forAdmin;

    public function __construct($title, $items, $forAdmin = false)
    {
        $this->title = $title;
        $this->items = collect($items)->filter(function ($item) {
            if (isset($item->auth))
                return $item->auth == Auth::check();
            return true;
        })->all();
        $this->forAdmin = $forAdmin;
    }
}

class TabItem
{
    public $title;
    public $icon;
    public $route;
    public $active;
    public $auth;

    public function __construct($title = 'Tab Item', $icon = 'fa-solid fa-archway', $route = 'home', $auth = null)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->route = $route;
        $this->active = request()->routeIs($route . '*');
        $this->auth = $auth;
    }
}
