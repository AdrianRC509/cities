<?php
// Author: Adrian Reyes
// Description: This project is an implementation of Seach and Sort by features using Livewire
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cities', function () {
    $all_cities = \App\Models\City::all();
    return view('cities.index', ['cities' => $all_cities]);
});

// Route::get('/playground', function(){
//     return view('layouts.app');
// });

Route::get('/liveCities', App\Http\Livewire\Cities::class);