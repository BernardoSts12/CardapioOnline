<div class="col-lg-3 col-md-4 ">
    <div class="sidebar ">
        <div class="pedido pedido-titulo">
            <h4>Pedido</h4>
            <h4>Preço</h4>
        </div>

        @foreach ( $carrinho as $item)
        <div class="pedido">
            <p class="pedido-escolha ">
                <button type="button" wire:click.prevent="delete({{$item->id}})" class="botao-deletar "> <i class="fa fa-trash-o" aria-hidden="true" id="deletar-carrinho"></i></button>
                {{$item->prato}}
            </p>
            <p class="pedido-preco "> R$ : {{$item->valor}}</p>
        </div>
        @endforeach

        <div class="pedido total ">
            <p class="pedido-escolha "> Total</p>
            <p class="pedido-preco-total "> R$ : {{$total ?? ''}}</p>
        </div>
    </div>
</div>

</div>