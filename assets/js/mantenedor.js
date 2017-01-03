jQuery(document).ready(function($) {
    
    // objeto que contiene las variables globales
    var main = {
        bs : $('#main').data('bs')
    };

    // jquery edit tabla empresas
    $('#tb_empresas').Tabledit({

        url: main.bs + 'backoffice/editarEmpresa',
        deleteButton: false,
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

    // jquery edit tabla empresas
    $('#tb_tipo_usuario').Tabledit({

        url: main.bs + 'backoffice/editarTipoUsuario',
        deleteButton: false,
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

    // datatable tipo_usuario
    $('#tb_tipo_usuario').DataTable({
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
            console.log("empresa agregada correctamente");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

    });

    // formulario nueva empresa
    $('#form_nueva_tipo').on('submit', function(e) {
        
        e.preventDefault();

        var nombre = $('#man_tipo_usuario').val();

        $.ajax({
            url: main.bs + 'backoffice/agregarTipoUsuario',
            type: 'post',
            dataType: 'json',
            data: {tipo_usuario: nombre},
        })
        .done(function(data) {
            window.location.href = main.bs + 'backoffice/mantenedor';
            console.log("tipo_usuario agregado correctamente");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

    });

});

