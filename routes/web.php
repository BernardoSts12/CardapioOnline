<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardapioController;
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

Route::get('/gestor/pratos', [CardapioController::class, 'index']);
Route::get('/gestor/pratos/create', [CardapioController::class, 'create']);
Route::post('/gestor/pratos', [CardapioController::class, 'store']);
Route::delete('/gestor/pratos/{id}',[CardapioController::class, 'destroy']);
Route::get('/gestor/pratos/edit/{id}',[CardapioController::class, 'edit']);
Route::put('/gestor/pratos/update/{id}',[CardapioController::class, 'update']);