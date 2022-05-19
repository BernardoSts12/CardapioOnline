<div class="row cardapio-container">
    <div class="col-lg-9 col-md-8 menu">

        @foreach ($cardapio as $prato )
        <div class="card cardapio-card">
            <div class="img-container ">
                <img src="{{asset('storage/img/'.$prato->image)}}" alt=" ">
                <a id="adicionar " class="adicionar" href="/addcarrinho/{{$prato->id}}">
                   +
                </a>
            </div>

            <div class="cardapio-content ">
                <p>{{$prato->nome}}</p>
                <span>R$ {{$prato->valor}}</span>
            </div>
        </div>
        @endforeach


    </div>