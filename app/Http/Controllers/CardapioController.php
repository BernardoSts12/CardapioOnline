<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cardapio;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;



class CardapioController extends Controller
{
 
    public function index(){
        $pratos = Cardapio::all();

        // dd($pratos[3]->categoria->nome);
        return view('gestor.pratos.index',["pratos"=>$pratos]);
    }

    public function create(){

        $categoria = Categoria::all();

        return view('gestor.pratos.create',['categoria'=>$categoria]);
    }

   
    public function store(Request $request){

        $validated = $request->validate([
            'nome' => 'required',
            'valor' => 'required',
            'disponivel'=> 'required',
            'descricao' => 'required',
            'id_categoria' => 'required',
            'image'=>'required',
        ]);

        $prato = new Cardapio;

        $prato->nome = $request->nome;
        $prato->valor = $request->valor;
        $prato->disponivel = $request->disponivel;
        $prato->descricao = $request->descricao;
        $prato->id_categoria = $request->id_categoria;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->storeAs('public/img', $imageName);;
            $prato->image = $imageName;
        }

        $prato->save();
        return redirect('/gestor/pratos');
    }

    public function destroy($id)
    {
        $pratos = Cardapio::findOrFail($id);
        Storage::disk('public')->delete('/img/' . $pratos->image);
        $campanha =  Cardapio::findOrFail($id)->delete();
        return back();
    }

    public function edit($id){

        $categoria = Categoria::all();
        $pratos = Cardapio::findOrFail($id);

        return view('gestor.pratos.edit',['categoria'=>$categoria,'pratos'=> $pratos]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $pratoIMG = Cardapio::findOrFail($id);
            Storage::disk('public')->delete('/img/' . $pratoIMG->image);
           
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->storeAs('public/img', $imageName);
            $data['image'] = $imageName;

        }

        $prato = Cardapio::findOrFail($request->id)->update($data);
        return redirect('/gestor/pratos'); 
    }
}
