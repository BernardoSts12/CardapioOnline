// Slick Slider
$(document).ready(function() {
    $('.carousel-slick').slick({
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        swipeToSlid: true,
        variableWidth: true,
    });

});

// $("#deletar-carrinho").hover(
//     function() {
//         $(this).addClass("deletar-cart");
//     },
//     function() {
//         $(this).removeClass("deletar-cart");
//     }
// );