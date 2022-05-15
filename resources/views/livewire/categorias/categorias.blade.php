<div>
    <div class="col-sm-12">

        <br>

        <form method="post" wire:submit.prevent="create">
            
            <input type="text" class="form-control" id="nome" name="nome" wire:model="nome">
            <button type="submit" class="btn btn-success">Adicionar</button>
        </form>


        <br>
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
            <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nome</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categorias)
                <tr class="odd">
                    <td class="dtr-control sorting_1" tabindex="0">{{$categorias->nome}}</td>
                    <td>
                        <button type="button" wire:click.prevent="delete({{$categorias->id}})" class="btn btn-danger">Deletar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>