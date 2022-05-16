@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

<a class="btn btn-success" href="/gestor/pratos/create">Adicionar</a>

<div class="col-sm-12">
    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
        <thead>
            <tr role="row">
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending">Nome</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Valor</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Categoria</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Disponível</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pratos as $pratos)
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">{{$pratos->nome}}</td>
                <td>{{$pratos->valor}}</td>
                <td>{{$pratos->Categoria->nome}}</td>
                <td>@if($pratos->disponivel == 1)
                    Sim
                    @else
                    Não
                    @endif</td>
                <td>
                    <a href="/gestor/pratos/edit/{{$pratos->id}}" class="btn btn-info edit-btn">
                        </ion-icon> Editar
                    </a>


                    <form action="/gestor/pratos/{{$pratos->id}}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">
                            Deletar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>

    </table>
</div>
@stop

@section('css')
@livewireStyles
@stop

@section('js')
@livewireScripts
@stop