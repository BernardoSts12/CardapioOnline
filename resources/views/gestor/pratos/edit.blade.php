@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<div class="card-body">
    <form method="POST" action="/gestor/pratos/update/{{$pratos->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="{{$pratos->nome}}">
        </div>
        <div class="form-group col-md-6">
            <label>Categoria</label>
            <select class="form-control select2 select2-hidden-accessible" id="id_categoria" name="id_categoria">
               @foreach ($categoria as $categoria)
               <option value="{{$categoria->id}}"  @if ($categoria->id == $pratos->id_categoria) selected @endif> {{$categoria->nome}}</option>
               @endforeach
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="valor" value="{{$pratos->valor}}" >
        </div>
        <div class="form-group col-md-6">
            <label>Disponível</label>
            <select class="form-control select2 select2-hidden-accessible" id="disponivel" name="disponivel">
                @if ($pratos->disponivel ==1)
                <option value="1" selected>Sim</option>
                <option value="0">Não</option>
                @else
                 <option value="1">Sim</option>
                <option value="0" selected>Não</option>
                @endif
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="image">Imagem</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" id="image" name="image" class="from-control-file" >
                    <label class="custom-file-label" for="image">selecione uma imagem</label>
                </div>

                <img src="{{asset('storage/img/'.$pratos->image)}}" alt="" class="img-preview">
              
            </div>
        </div>

        <div class="col-md-6">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3">{{$pratos->descricao}}</textarea>
        </div>


        <div class="col-md-6"><button type="submit" class="btn btn-success">Adicionar</button></div>
    </form>

</div>
@stop

@section('css')
@livewireStyles
@stop

@section('js')
@livewireScripts
@stop