$(document).ready(function(){

    $('#open_usuario').click(function () {

        $('#usuario').toggle('fast');

    });

    $('#open_cliente').click(function () {

        $('#cliente').toggle('fast');

    });


    $('#open_prestamo').click(function () {

        $('#prestamo').toggle('fast');

    });

    
    $('#open_ajustes').click(function () {

        $('#ajustes').toggle('fast');

    });

    // Menú



    $('#menu__pr').click(function(){

        var leftmenu = $('#left-menu');

        if($(this).data("id") == 1){

            leftmenu.toggle('fast');

            $('#contenido').removeClass('col-lg-10');

            $('#contenido').addClass('col-lg-12');

            $(this).data("id", 2);

        } else {

            leftmenu.toggle('fast');

            $('#contenido').removeClass('col-lg-12');

            $('#contenido').addClass('col-lg-10');

        }

    });



    $('#open-left-menu').click(function(){

      $('.left-menu').toggle('fast');

    });



    // $('#pago').click(function(){

    // });



    // Método ajax para buscar



});