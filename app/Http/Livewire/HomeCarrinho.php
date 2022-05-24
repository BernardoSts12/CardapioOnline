<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Carrinho;

class HomeCarrinho extends Component
{
    public $total = 0;
    public $carrinho;

    public function __construct(){ 
        $this->carrinho = Carrinho::where([
            ['user_id', 1]
        ])->get();

        foreach ($this->carrinho as $itens){
            $this->total = $this->total + $itens->valor;
        }
    }

    public function render()
    {
        $this->carrinho = Carrinho::where([
            ['user_id', 1]
        ])->get();
        return view('livewire.home-carrinho');
    }

    public function delete($id)
    {
        $item = Carrinho::findOrFail($id);

        $this->total = $this->total - $item->valor;

        Carrinho::findOrFail($id)->delete();

        return back();
    }
    
}
