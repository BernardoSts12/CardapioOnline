<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class Categorias extends Component
{
    public $nome;

    protected $rules = [
        'nome' => 'required',
    ];

    public function render()
    {
        $categorias = Categoria::All();
        return view('livewire.categorias.categorias', ['categorias' => $categorias])->layout('gestor.index');
    }

    public function create()
    {
        $this->validate();

        Categoria::create([
            'nome' => $this->nome,
        ]);

        $this->nome = " ";
    }

    public function delete($id)
    {

        Categoria::findOrFail($id)->delete();
    }
}
