<div>
    <div class="col-sm-12">

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
                    <td class="dtr-control sorting_1" tabindex="0">{{$categorias}}</td>
                    <td>
                        <button type="button" class="btn btn-danger">Deletar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>