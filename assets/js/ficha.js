jQuery(document).ready(function($) {
    
    // objeto que contiene las variables globales
    var main = {
        bs : $('#general').data('bs')
    };


    // datatable tipo_usuario
    // $('#tb_fichas').DataTable({
    //     "language": {
    //         url : 'http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
    //     }
    // });

    // btn enviar ficha 
    $(".btn_enviar").click(function(event) {
        
        var fila = $(this).closest('tr');
        var id_ficha = fila.data('id');

        $.ajax({
            url: main.bs + 'ficha/updateEstadoProveedor',
            type: 'POST',
            dataType: 'JSON',
            data: {ficha_id: id_ficha},
        })
        .done(function() {
            console.log("success");
            window.location.href = main.bs + 'ficha/ver_ficha_proveedor';
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        

    });    

    // btn eliminar ficha 
    $(".btn_eliminar").click(function(event) {
        
        var fila = $(this).closest('tr');
        var id_ficha = fila.data('id');

        $.ajax({
            url: main.bs + 'ficha/eliminarFichaProveedor',
            type: 'POST',
            dataType: 'JSON',
            data: {ficha_id: id_ficha},
        })
        .done(function() {
            console.log("success");
            window.location.href = main.bs + 'ficha/ver_ficha_proveedor';
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        

    });

    // -----------------------------
    // btn enviar ficha 
    $(".btn_enviar_jp").click(function(event) {
        
        var fila = $(this).closest('tr');
        var id_ficha = fila.data('id');

        $.ajax({
            url: main.bs + 'ficha/updateEstadoComprador',
            type: 'POST',
            dataType: 'JSON',
            data: {ficha_id: id_ficha},
        })
        .done(function() {
            console.log("success");
            window.location.href = main.bs + 'ficha/ver_ficha_comprador';
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        

    });

});
