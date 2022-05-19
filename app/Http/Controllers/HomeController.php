<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Cardapio;
use App\Models\Carrinho;

class HomeController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $cardapio = Cardapio::all();
        return view('layouts.app',['categorias'=> $categorias, 'cardapio' => $cardapio]);
    }

    public function categoria($id)
    {
        $categorias = Categoria::all();

        $cardapio = Cardapio::where([
            ['id_categoria',$id]
        ])->get();

        return view('layouts.app',['categorias'=> $categorias, 'cardapio' => $cardapio]);
    }

    public function addCarrinho($id){
        $cardapio = Cardapio::findOrFail($id);
        
        $carrinho = new Carrinho;
        $carrinho->prato = $cardapio->nome;
        $carrinho->valor = $cardapio->valor;
        $carrinho->user_id = 1;
        $carrinho->save();

        return back();
    }
}
