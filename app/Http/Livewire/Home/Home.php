<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\{
    Movie,
    Series
};

class Home extends Component
{

    public $type;
    protected $queryString = ['type'];

    
    public function mount(){
        $this->last = null;
        
        if($this->type === 'movies'){
            $this->last = Movie::with('cover')->take(5)->get(['id', 'name', 'rating', 'description']);
            
            // dd($this->last->toArray());
        }

        // elseif($this->type==='series'){
        //     $this->last = Series::with(
        //         [
        //             'seasons' => function($season){
        //                 return $season->with(
        //                     [
        //                         'episodes' => function($episode){
        //                             return $episode->with(
        //                                 [
        //                                     'cover' => function($cover){
        //                                         return $cover->latest()->take(1);
        //                                     }
        //                                 ]
        //                                 );
        //                         }
        //                     ]
        //                 );
        //             }
        //         ]
        //         )->get(['id']);
        //     dd($this->last->toArray());
        // }

        // else{
        //     abort(404);
        // }

        if (!request()->query('type')){
            return redirect()->route('home', ['type' => 'movies']);
        }
    }

    public function render(){
        return view('livewire.home.home',);
    }
}
