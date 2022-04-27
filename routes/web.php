<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logout;

use App\Http\Livewire\Home\Home;

use App\Http\Livewire\Series\{
    Show as ShowEpisode,
    All as AllSeries,
    AddSeries,
};
use App\Http\Livewire\Movies\{
    Show as ShowMovie,
    All as AllMovies,
    AddMovie,
};

use App\Http\Livewire\Favourites\Favourites;
use App\Http\Livewire\Collaborations\Collaboration;


use App\Http\Livewire\WatchLater\{
    All as AllWatchLater
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', Home::class)->name('home');

Route::get('/logout', [Logout::class, 'logout'])->name('logout-get');

Route::group(['prefix' => 'admin' , 'middleware' => 'admin'] ,function(){
    Route::get('/add/movie', AddMovie::class)->name('add-movie');
    Route::get('/add/series', AddSeries::class)->name('add-series');
});

//movies
Route::prefix('movies')->group(function (){
    Route::get('/', AllMovies::class)->name('movies-all');
    Route::get('/show/{movie}/{room?}', ShowMovie::class)->name('movie-show');
});

//Series
Route::prefix('series')->group(function (){
    Route::get('/', AllSeries::class)->name('series-all');

    Route::get('/show/{episode}', ShowEpisode::class)->name('series-show');
});


Route::prefix('favourites')->group(function (){
    Route::get('/', Favourites::class)->name('favourites');
});

Route::prefix('watchlater')->group(function (){
    Route::get('/', AllWatchLater::class)->name('watch-later-all');
});

Route::prefix('collaboration')->group(function (){
    Route::get('/', Collaboration::class)->name('collaboration');
});






// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
