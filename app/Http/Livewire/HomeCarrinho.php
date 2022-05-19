<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrinho;

class HomeCarrinho extends Component
{
    public $total = 0;

    public function render()
    {
        $carrinho = Carrinho::where([
            ['user_id', 1]
        ])->get();

        foreach ($carrinho as $itens){
            $this->total = $this->total + $itens->valor;
        }
        
        return view('livewire.home-carrinho',['carrinho' => $carrinho]);
    }

    public function delete($id)
    {
        $item = Carrinho::findOrFail($id);

        $this->total = $this->total - $item->valor;

        Carrinho::findOrFail($id)->delete();
    }
}
