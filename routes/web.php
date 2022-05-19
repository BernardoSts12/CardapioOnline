<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Categorias;



Route::get('/', [HomeController::class, 'index']);
Route::get('/categoria/{id}', [HomeController::class, 'categoria']);
Route::get('/addcarrinho/{id}',[HomeController::class, 'addCarrinho']);

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



