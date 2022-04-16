<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logout;

use App\Http\Livewire\Home\Home;
use App\Http\Livewire\Series\{
    All as AllSeries,
    show as SeriesShow,
};
use App\Http\Livewire\Movies\{
    Show as ShowMovie,
    All as AllMovies,
};
use App\Http\Livewire\Favourites\Favourites;
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


//movies
Route::prefix('movies')->group(function (){
    Route::get('/', AllMovies::class)->name('movies-all');

    Route::get('/show/{id?}', ShowMovie::class)->name('movie-show');
});


//
Route::prefix('series')->group(function (){
    Route::get('/series', AllSeries::class)->name('series-all');
    // Route::get('/show/{id?}', ShowMovie::class)->name('movies-show');
});

Route::get('/favourites', Favourites::class)->name('favourites');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
