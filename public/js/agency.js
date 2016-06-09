/*!
 * Start Bootstrap - Agency Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin

$(document).ready(function(){
  $('.modal-click').on('click', function(){

    var pelicula = $(this).data('id');
    console.log(pelicula);
    $(".modal-titulo").html(pelicula['title']);
    $("#img-modal").attr("src",pelicula['image']);
    $("#descripcion").html(pelicula['descripcion']);
    $("#calidades").html(pelicula['calidad_alta']+" | "+pelicula['calidad_baja']);

  });
});

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
