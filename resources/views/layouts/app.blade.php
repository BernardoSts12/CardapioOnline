<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Online</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Slide Slick css -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- livewire CSS -->
    @livewireStyles
</head>

<body>

    <!-- Banner  -->
    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/modelo-de-banner-de-site-moderno-com-formas-abstratas_1361-3311.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> -->
    <!-- End Banner -->

    <!-- Carousel category -->
    <div class="category">
        <div class="category-title">
            <h3>Conheca <span>nosso</span> cardápio</h3>
        </div>
        <div class="carousel-slick">
            <div class="category-item">Comida</div>
            <div class="category-item">your content 2</div>
            <div class="category-item">Bebida</div>
            <div class="category-item">your content 4</div>
            <div class="category-item">your content 5</div>
            <div class="category-item">your content 6</div>
            <div class="category-item">your content 7</div>
        </div>
    </div>
    <!-- End Carousel category -->

    <div class="row cardapio-container">
        <div class="col-lg-9 col-md-8 menu">


            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Porção de Arroz </p>
                    <span>R$ 50,00</span>
                </div>
            </div>
            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Porção de Feijão </p>
                    <span>R$ 50,00</span>
                </div>
            </div>



            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Prato Feito </p>
                    <span>R$ 50,00</span>
                </div>
            </div>
            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Filé de Frango </p>
                    <span>R$ 50,00</span>
                </div>
            </div>

            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Risoto de Shiitake </p>
                    <span>R$ 50,00</span>
                </div>
            </div>

            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Prato Feito de frango e</p>
                    <span>R$ 50,00</span>
                </div>
            </div>
            <div class="card cardapio-card">
                <div class="img-container ">
                    <img src="img/33161ab89af9882251972111ae710d59.jpg " alt=" ">
                    <button id="adicionar " class="adicionar ">
                        +
                    </button>
                </div>

                <div class="cardapio-content ">
                    <p>Prato Feito de frango e</p>
                    <span>R$ 50,00</span>
                </div>
            </div>






        </div>



        <div class="col-lg-3 col-md-4 ">
            <div class="sidebar ">
                <div class="pedido ">
                    <h4>Pedido</h4>
                    <h4>Preço</h4>
                </div>
                <hr>
                <div class="pedido ">
                    <p class="pedido-escolha "> filé de frango</p>
                    <p class="pedido-preco "> R$ : 50,00</p>
                </div>

                <div class="pedido ">
                    <p class="pedido-escolha "> Peito de Frango com batata doce</p>
                    <p class="pedido-preco "> R$ : 50,00</p>
                </div>

                <div class="pedido ">
                    <p class="pedido-escolha "> filé de frango</p>
                    <p class="pedido-preco "> R$ : 50,00</p>
                </div>

                <div class="pedido ">
                    <p class="pedido-escolha "> filé de frango</p>
                    <p class="pedido-preco "> R$ : 50,00</p>
                </div>

                <div class="pedido ">
                    <p class="pedido-escolha "> filé de frango</p>
                    <p class="pedido-preco "> R$ : 50,00</p>
                </div>

                <hr>
                <div class="pedido total ">
                    <p class="pedido-escolha "> Total</p>
                    <p class="pedido-preco-total "> R$ : 550,00</p>
                </div>
            </div>
        </div>

    </div>


    <!-- Script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>

    <!-- Script slick slide -->
    <script type="text/javascript " src="//code.jquery.com/jquery-1.11.0.min.js "></script>
    <script type="text/javascript " src="//code.jquery.com/jquery-migrate-1.2.1.min.js "></script>
    <script type="text/javascript " src="js/slick.min.js "></script>

    <script type="text/javascript " src="js/index.js "></script>

    <!-- livewire Script -->
    @livewireScripts
</body>


</html>