<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home\Home;
use App\Http\Controllers\Logout;
use App\Http\Livewire\Movies\ShowMovie;
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

Route::get('/show-movie', ShowMovie::class)->name('show-movie');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
