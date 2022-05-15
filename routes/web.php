<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Categorias;

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
    return view('layouts.app');
});

Route::get('/gestor', function () {
    return view('gestor.index');
});


Route::get('/gestor/categorias', Categorias::class);
