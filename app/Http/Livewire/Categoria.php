<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Categoria extends Component
{
    public function render()
    {
        $categorias = ['arroz','Feijão0'];
        return view('livewire.categoria', ["categorias" =>  $categorias]);
    }
}
