<!-- Carousel category -->
<div class="category">
    <div class="category-title">
        <h3>Conheca <span>nosso</span> cardápio</h3>
    </div>
    <div class="carousel-slick">
        <a class="category-item" href="/"> Todos</a>
        @foreach ($categorias as $categoria )
        <a class="category-item" href="/categoria/{{$categoria->id}}"> {{$categoria->nome}}</a>
        @endforeach

    </div>
</div>
<!-- End Carousel category -->