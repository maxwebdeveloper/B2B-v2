jQuery(document).ready(function($) {
    
    // objeto que contiene las variables globales
    var main = {
        bs : $('#main').data('bs')
    };

    // jquery edit tabla empresas
    $('#tb_empresas').Tabledit({

        url: main.bs + 'backoffice/editarEmpresa',
        restoreButton: false,
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'nombre'], [2, 'estado', '{"A": "Activo", "I": "Inactivo"}']]
        },
        onDraw: function() {
            console.log('onDraw()');
        },
        onSuccess: function(data, textStatus, jqXHR) {
            console.log('onSuccess(data, textStatus, jqXHR)');
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);
        },
        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        onAlways: function() {
            console.log('onAlways()');
        },
        onAjax: function(action, serialize) {
            console.log('onAjax(action, serialize)');
            console.log(action);
            console.log(serialize);
        }
    });  

    // datatable empresas
    $('#tb_empresas').DataTable({
        "language": {
            url : 'http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
        }
    });

    // formulario nueva empresa
    $('#form_nueva_empresa').on('submit', function(e) {
        e.preventDefault();

        var nombre = $('#man_empresa').val();
        $.ajax({
            url: main.bs + 'backoffice/agregarEmpresa',
            type: 'post',
            dataType: 'json',
            data: {empresa: nombre},
        })
        .done(function(data) {
            window.location.href = main.bs + 'backoffice/mantenedor';
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        

    });

});


// $(function () {
      
        

//     $('#tb_empresas').DataTable({

//         "ajax": {
//             "url": main.bs + 'backoffice/loadEmpresas',
//             "dataSrc": ""
//         },
//         "columns": [
//             { "data": "id" },
//             { "data": "nombre" },
//             { "data": "estado" },
//         ],
//         "language": {
//             url : 'http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
//         }
//     });  
    
//     $('#tb_empresas').Tabledit({

//         url: main.bs + 'backoffice/editarEmpresa',
//         restoreButton: false,
//         columns: {
//             identifier: [0, 'id'],
//             editable: [[1, 'nombre'], [2, 'estado', '{"A": "Activo", "I": "Inactivo"}']]
//         },
//         onDraw: function() {
//             console.log('onDraw()');
//         },
//         onSuccess: function(data, textStatus, jqXHR) {
//             console.log('onSuccess(data, textStatus, jqXHR)');
//             console.log(data);
//             console.log(textStatus);
//             console.log(jqXHR);
//         },
//         onFail: function(jqXHR, textStatus, errorThrown) {
//             console.log('onFail(jqXHR, textStatus, errorThrown)');
//             console.log(jqXHR);
//             console.log(textStatus);
//             console.log(errorThrown);
//         },
//         onAlways: function() {
//             console.log('onAlways()');
//         },
//         onAjax: function(action, serialize) {
//             console.log('onAjax(action, serialize)');
//             console.log(action);
//             console.log(serialize);
//         }
//     });
// });