$(document).ready(function(){
    $('.hom').on('click', function(){

        $(this).parents().find('.c1').addClass('visible');
        $(this).parents().find('.c2').removeClass('visible');
        $(this).parents().find('.c3').removeClass('visible');
        $(this).parents().find('.c4').removeClass('visible');
        $(this).parents().find('.c5').removeClass('visible');
        $(this).parents().find('.c6').removeClass('visible');

        $(this).parents().find('.c1').addClass('visible');
        $(this).parents().find('.c2').addClass('hidden');
        $(this).parents().find('.c3').addClass('hidden');
        $(this).parents().find('.c4').addClass('hidden');
        $(this).parents().find('.c5').addClass('hidden');
        $(this).parents().find('.c6').addClass('hidden');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto1.jpg")';
        //$(this).parents().find('.contenedornavega cion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.n6').on('click', function(){

        $(this).parents().find('.c1').addClass('visible');
        $(this).parents().find('.c2').removeClass('visible');
        $(this).parents().find('.c3').removeClass('visible');
        $(this).parents().find('.c4').removeClass('visible');
        $(this).parents().find('.c5').removeClass('visible');
        $(this).parents().find('.c6').removeClass('visible');

        $(this).parents().find('.c1').addClass('visible');
        $(this).parents().find('.c2').addClass('hidden');
        $(this).parents().find('.c3').addClass('hidden');
        $(this).parents().find('.c4').addClass('hidden');
        $(this).parents().find('.c5').addClass('hidden');
        $(this).parents().find('.c6').addClass('hidden');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto1.jpg")';
        $(this).parents().find('header').addClass('hideHead');

        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');

        //$(this).parents().find('.contenedornavega cion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.n1').on('click', function(){

        $(this).parents().find('.c1').removeClass('visible');
        $(this).parents().find('.c2').addClass('visible');
        $(this).parents().find('.c3').removeClass('visible');
        $(this).parents().find('.c4').removeClass('visible');
        $(this).parents().find('.c5').removeClass('visible');
        $(this).parents().find('.c6').removeClass('visible');

        $(this).parents().find('.c1').addClass('hidden');
        $(this).parents().find('.c2').addClass('visible');
        $(this).parents().find('.c3').addClass('hidden');
        $(this).parents().find('.c4').addClass('hidden');
        $(this).parents().find('.c5').addClass('hidden');
        $(this).parents().find('.c6').addClass('hidden');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto2.jpg")';
        $(this).parents().find('header').addClass('hideHead');

        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');

        //$(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.n2').on('click', function(){

        $(this).parents().find('.c1').removeClass('visible');
        $(this).parents().find('.c2').removeClass('visible');
        $(this).parents().find('.c3').addClass('visible');
        $(this).parents().find('.c4').removeClass('visible');
        $(this).parents().find('.c5').removeClass('visible');
        $(this).parents().find('.c6').removeClass('visible');

        $(this).parents().find('.c1').addClass('hidden');
        $(this).parents().find('.c2').addClass('hidden');
        $(this).parents().find('.c3').addClass('visible');
        $(this).parents().find('.c4').addClass('hidden');
        $(this).parents().find('.c5').addClass('hidden');
        $(this).parents().find('.c6').addClass('hidden');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto3.jpg")';
        $(this).parents().find('header').addClass('hideHead');

        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');

        //$(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.n3').on('click', function(){

        $(this).parents().find('.c1').removeClass('visible');
        $(this).parents().find('.c2').removeClass('visible');
        $(this).parents().find('.c3').removeClass('visible');
        $(this).parents().find('.c4').addClass('visible');
        $(this).parents().find('.c5').removeClass('visible');
        $(this).parents().find('.c6').removeClass('visible');

        $(this).parents().find('.c1').addClass('hidden');
        $(this).parents().find('.c2').addClass('hidden');
        $(this).parents().find('.c3').addClass('hidden');
        $(this).parents().find('.c4').addClass('visible');
        $(this).parents().find('.c5').addClass('hidden');
        $(this).parents().find('.c6').addClass('hidden');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto4.jpg")';
        $(this).parents().find('header').addClass('hideHead');

        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');

        //$(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.n4').on('click', function(){

        $(this).parents().find('.c1').removeClass('visible');
        $(this).parents().find('.c2').removeClass('visible');
        $(this).parents().find('.c3').removeClass('visible');
        $(this).parents().find('.c4').removeClass('visible');
        $(this).parents().find('.c5').addClass('visible');
        $(this).parents().find('.c6').removeClass('visible');

        $(this).parents().find('.c1').addClass('hidden');
        $(this).parents().find('.c2').addClass('hidden');
        $(this).parents().find('.c3').addClass('hidden');
        $(this).parents().find('.c4').addClass('hidden');
        $(this).parents().find('.c5').addClass('visible');
        $(this).parents().find('.c6').addClass('hidden');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto5.jpg")';
        $(this).parents().find('header').addClass('hideHead');

        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');

        //$(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.n5').on('click', function(){

        $(this).parents().find('.c1').removeClass('visible');
        $(this).parents().find('.c2').removeClass('visible');
        $(this).parents().find('.c3').removeClass('visible');
        $(this).parents().find('.c4').removeClass('visible');
        $(this).parents().find('.c5').removeClass('visible');
        $(this).parents().find('.c6').addClass('visible');

        $(this).parents().find('.c1').addClass('hidden');
        $(this).parents().find('.c2').addClass('hidden');
        $(this).parents().find('.c3').addClass('hidden');
        $(this).parents().find('.c4').addClass('hidden');
        $(this).parents().find('.c5').addClass('hidden');
        $(this).parents().find('.c6').addClass('visible');

        document.getElementsByTagName('main')[0].style.backgroundImage='url("images/foto6.jpg")';
        $(this).parents().find('header').addClass('hideHead');

        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');
        

        //$(this).parents().find('.contenedornavegacion').toggleClass('menu_desplegado menu_plegado');
        //$(this).parents().find('.contenedor_icono_burger').toggleClass('icono_barras icono_cruz');
    });

    $('.menuB').on('click', function(){

        $(this).parents().find('header').toggleClass('hideHead');

        document.getElementById('li1').classList.toggle('an1');
        document.getElementById('li2').classList.toggle('an2');
        document.getElementById('li3').classList.toggle('an3');
    });

    $('main').on('click', function(){
        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');
        document.getElementsByTagName('header')[0].classList.add('hideHead');

    });

    $('footer').on('click', function(){
        document.getElementById('li1').classList.remove('an1');
        document.getElementById('li2').classList.remove('an2');
        document.getElementById('li3').classList.remove('an3');
        document.getElementsByTagName('header')[0].classList.add('hideHead');

    });

});
