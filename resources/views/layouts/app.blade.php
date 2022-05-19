<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Online</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Slide Slick css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slick-theme.css')}}" />

    <!-- css -->
    <link rel="stylesheet" href=" {{URL::asset('/css/style.css')}}">

    <!-- livewire CSS -->
    @livewireStyles
</head>

<body>
    @include('home._categorias')
    @include('home._cards')
    <livewire:home-carrinho/>

    <!-- Script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js " integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js " integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF " crossorigin="anonymous "></script>

    <!-- Script slick slide -->
    <script type="text/javascript " src="//code.jquery.com/jquery-1.11.0.min.js "></script>
    <script type="text/javascript " src="//code.jquery.com/jquery-migrate-1.2.1.min.js "></script>
    <script type="text/javascript " src="{{URL::asset('js/slick.min.js')}}"></script>

    <script type="text/javascript " src="{{URL::asset('js/index.js')}}"></script>

    <!-- livewire Script -->
    @livewireScripts
</body>


</html>