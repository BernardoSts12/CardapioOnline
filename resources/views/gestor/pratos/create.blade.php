@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<div class="card-body">
    <form method="POST" action="/gestor/pratos" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
        </div>
        <div class="form-group col-md-6">
            <label>Categoria</label>
            <select class="form-control select2 select2-hidden-accessible" id="id_categoria" name="id_categoria">
               @foreach ($categoria as $categoria)
               <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
               @endforeach
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="valor">
        </div>
        <div class="form-group col-md-6">
            <label>Disponível</label>
            <select class="form-control select2 select2-hidden-accessible" id="disponivel" name="disponivel">
                <option value="1" selected="selected">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="image">Imagem</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" id="image" name="image" class="from-control-file" >
                    <label class="custom-file-label" for="image">selecione uma imagem</label>
                </div>

            </div>
        </div>

        <div class="col-md-6">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
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