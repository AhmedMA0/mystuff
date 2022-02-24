$(document).ready(function(){
    $('').on('click', function(){
        $(this).parents().find('.lienzoinicio').removeClass('visible');
        $(this).parents().find('.lienzosmr').addClass('visible');
        $(this).parents().find('.lienzoasir').removeClass('visible');
        $(this).parents().find('.lienzodaw').removeClass('visible');
        $(this).parents().find('.lienzodam').removeClass('visible');
        $(this).parents().find('.lienzocib').removeClass('visible');

        $(this).parents().find('.lienzoinicio').addClass('invisible');
        $(this).parents().find('.lienzosmr').addClass('visible');
        $(this).parents().find('.lienzoasir').addClass('invisible');
        $(this).parents().find('.lienzodaw').addClass('invisible');
        $(this).parents().find('.lienzodam').addClass('invisible');
        $(this).parents().find('.lienzocib').addClass('invisible');

        $(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
        $(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });
});
