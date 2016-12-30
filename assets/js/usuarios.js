// objeto que contiene las variables globales
var main = {
    bs : $('#main').data('bs')
};

// datatable usuarios
$('#tb_usuarios').DataTable({
    "language": {
        url : 'http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
    }
});



// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::::::::: evento click sobre el boton con la clase btn_ver (ver detalle) ::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$('.btn_ver').click(function() {

	var fila = $(this).closest('tr');

	// modificamos el contenido de la modal detalle
    $('#rut').html(fila.data('rut'));
	$('#nombre').html(fila.data('nombre'));
	$('#direccion').html(fila.data('direccion'));
	$('#fono').html(fila.data('fono'));
	$('#correo').html(fila.data('correo'));
	$('#estado').html(fila.data('estado'));
	$('#empresa').html(fila.data('empresa'));
    $('#tipo').html(fila.data('tipo'));
    $('#comuna').html(fila.data('comuna'));
    $('#provincia').html(fila.data('provincia'));
	$('#region').html(fila.data('region'));


});

// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::: evento click sobre el boton con la clase btn_eliminar :::::::::::::::::::::::::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$('.btn_eliminar').click(function(){
	
	var fila = $(this).closest('tr');

	// modificamos el contenido de la modal eliminar
	var mensaje = "Estas a punto de eliminar el usuario <b>" + fila.data('nombre') + 
	"</b>, que pertenece a la empresa <b>" + fila.data('empresa') + "</b>. ¿Estas seguro de que deseas proceder?";

	$('#mensaje_eliminar').html(mensaje);

	var link = fila.data('bs') + 'usuarios/eliminar/' + fila.data('id');
	$('#confirmar').attr('href', link);
 
});


// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::: valida el formulario nuevo usuario ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
$('#form_nuevo_usuario').validate( {

    rules: {
        rut: {
            required: true,
            minlength: 9,
            maxlength: 10
        },
        nombre: {
            required: true,
            minlength: 3,
            maxlength: 45
        },
        apellido: {
            required: true,
            minlength: 3,
            maxlength: 45
        },
        direccion: {
            required: true,
            minlength: 10,
            maxlength: 45
        },
        telefono: {
            required: true,
            minlength: 6,
            maxlength: 10
        },
        email: {
            required: true,
            minlength: 8,
            maxlength: 250,
            email: true
        },
        password: {
            required: true,
            minlength: 3,
            maxlength: 45
        },
        re_password: {
            required: true,
            minlength: 3,
            maxlength: 45,
            equalTo: "#password"
        },
        empresa: {
            required: true
        },
        tipo: {
            required: true
        },
        region: {
            required: true
        },
        provincia: {
            required: true
        },
        comuna: {
            required: true
        },
    },
    messages: {
        rut: {
            required: "Ingresa el rut de la persona",
            minlength: "El rut no puede tener menos de 9 caracteres",
            maxlength: "El rut no puede tener más de 10 caracteres"
        },
        nombre: {
            required: "Ingresa el nombre de la persona",
            minlength: "El nombre no puede tener menos de 3 caracteres",
            maxlength: "El nombre no puede tener más de 45 caracteres"
        },
        apellido: {
            required: "Ingresa el apellido de la persona",
            minlength: "El apellido no puede tener menos de 9 caracteres",
            maxlength: "El apellido no puede tener más de 10 caracteres"
        },
        direccion: {
            required: "Ingresa el direccion de la persona",
            minlength: "El direccion no puede tener menos de 10 caracteres",
            maxlength: "El direccion no puede tener más de 45 caracteres"
        },
        telefono: {
            required: "Ingresa el telefono de la persona",
            minlength: "El telefono no puede tener menos de 6 caracteres",
            maxlength: "El telefono no puede tener más de 10 caracteres"
        },
        email: {
            required: "Ingresa el email de la persona",
            minlength: "El email no puede tener menos de 8 caracteres",
            maxlength: "El email no puede tener más de 250 caracteres",
            email: "El email ingresado no es valido"
        },
        password: {
            required: "Ingresa el password de la persona",
            minlength: "El password no puede tener menos de 3 caracteres",
            maxlength: "El password no puede tener más de 45 caracteres"
        },
        re_password: {
            required: "Ingresa el password de la persona",
            minlength: "El password no puede tener menos de 3 caracteres",
            maxlength: "El password no puede tener más de 45 caracteres",
            equalTo: "Por favor, introduzca la misma password"
        },
        empresa: {
            required: "Seleccione una empresa de la lista"
        },
        tipo: {
            required: "Seleccione el tipo de usuario"
        },
        region: {
            required: "Seleccione la region de usuario"
        },
        provincia: {
            required: "Seleccione la provincia de usuario"
        },
        comuna: {
            required: "Seleccione la comuna de usuario"
        },
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {

        // Agrega la clase `help-block` al elemento con error
        error.addClass( "help-block" );

        // Agrega la clase `has-feedback` al elemento padre div.form-group
        element.parents( ".form-group" ).addClass( "has-feedback" );

        if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.parent( "label" ) );
        } else {
            error.insertAfter( element );
        }

        // Agrega un span, si no existe, y le aplica el icono de error
        if ( !element.next( "span" )[ 0 ] ) {
            $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
        }
    },
    success: function ( label, element ) {

        // Agrega un span, si no existe, y le aplica el icono ok
        if ( !$( element ).next( "span" )[ 0 ] ) {
            $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
        }

    },
    highlight: function ( element, errorClass, validClass ) {
        $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
        $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
    },
    unhighlight: function ( element, errorClass, validClass ) {
        $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
        $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
    }

} );

// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::: valida el formulario editar usuario ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// $('#form_editar_usuario').validate( {

//     rules: {
//         nombre: {
//             required: true,
//             minlength: 3,
//             maxlength: 45
//         },
//         direccion: {
//             required: true,
//             minlength: 10,
//             maxlength: 45
//         },
//         telefono: {
//             required: true,
//             minlength: 6,
//             maxlength: 10
//         },
//         email: {
//             required: true,
//             minlength: 8,
//             maxlength: 250,
//             email: true
//         },
//         password: {
//             required: false,
//             minlength: 3,
//             maxlength: 45
//         },
//         re_password: {
//             required: false,
//             minlength: 3,
//             maxlength: 45,
//             equalTo: "#password"
//         },
//         empresa: {
//             required: true
//         },
//         tipo: {
//             required: true
//         },
//     },
//     messages: {
//         nombre: {
//             required: "Ingresa el nombre de la persona",
//             minlength: "El nombre no puede tener menos de 3 caracteres",
//             maxlength: "El nombre no puede tener más de 45 caracteres"
//         },
//         direccion: {
//             required: "Ingresa el direccion de la persona",
//             minlength: "El direccion no puede tener menos de 10 caracteres",
//             maxlength: "El direccion no puede tener más de 45 caracteres"
//         },
//         telefono: {
//             required: "Ingresa el telefono de la persona",
//             minlength: "El telefono no puede tener menos de 6 caracteres",
//             maxlength: "El telefono no puede tener más de 10 caracteres"
//         },
//         email: {
//             required: "Ingresa el email de la persona",
//             minlength: "El email no puede tener menos de 8 caracteres",
//             maxlength: "El email no puede tener más de 250 caracteres",
//             email: "El email ingresado no es valido"
//         },
//         password: {
//             minlength: "El password no puede tener menos de 3 caracteres",
//             maxlength: "El password no puede tener más de 45 caracteres"
//         },
//         re_password: {
//             minlength: "El password no puede tener menos de 3 caracteres",
//             maxlength: "El password no puede tener más de 45 caracteres",
//             equalTo: "Por favor, introduzca la misma password"
//         },
//         empresa: {
//             required: "Seleccione una empresa de la lista"
//         },
//         tipo: {
//             required: "Seleccione el tipo de usuario"
//         },
//     },
//     errorElement: "em",
//     errorPlacement: function ( error, element ) {

//         // Agrega la clase `help-block` al elemento con error
//         error.addClass( "help-block" );

//         // Agrega la clase `has-feedback` al elemento padre div.form-group
//         element.parents( ".form-group" ).addClass( "has-feedback" );

//         if ( element.prop( "type" ) === "checkbox" ) {
//             error.insertAfter( element.parent( "label" ) );
//         } else {
//             error.insertAfter( element );
//         }

//         // Agrega un span, si no existe, y le aplica el icono de error
//         if ( !element.next( "span" )[ 0 ] ) {
//             $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
//         }
//     },
//     success: function ( label, element ) {

//         // Agrega un span, si no existe, y le aplica el icono ok
//         if ( !$( element ).next( "span" )[ 0 ] ) {
//             $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
//         }

//     },
//     highlight: function ( element, errorClass, validClass ) {
//         $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
//         $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
//     },
//     unhighlight: function ( element, errorClass, validClass ) {
//         $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
//         $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
//     }

// } );

$('#form_editar_usuario').submit(function(event) {
    
    event.preventDefault();
    
    $.ajax({
        type: 'POST',
        url: main.bs + 'usuarios/actualizar',
        dataType: 'json', 
        data: $('#form_editar_usuario').serialize(),
        success: function(data){

            if (data.correcto) {
                console.log("paso la validacion");
                window.location.href = main.bs + 'usuarios';
            } else {
                console.log("No paso la validacion");

                var rut         = data.errores.err_rut;
                var nombre      = data.errores.err_nombre;
                var apellido    = data.errores.err_apellido;
                var direccion   = data.errores.err_direccion;
                var telefono    = data.errores.err_telefono;
                var email       = data.errores.err_email;
                var empresa     = data.errores.err_empresa;
                var tipo        = data.errores.err_tipo;
                var comuna        = data.errores.err_comuna;

                addError(rut,       $('#msg_rut'));
                addError(nombre,    $('#msg_nombre'));
                addError(apellido,  $('#msg_apellido'));
                addError(direccion, $('#msg_direccion'));
                addError(telefono,  $('#msg_telefono'));
                addError(email,     $('#msg_email'));
                addError(empresa,   $('#msg_empresa'));
                addError(tipo,      $('#msg_tipo'));
                addError(comuna,    $('#msg_comuna'));
            }


        }
    });

});

function addError(error, id_span){

    if (error != null && error.length > 0) {
        id_span.closest('.form-group').removeClass('has-success');
        id_span.closest('.form-group').addClass('has-error');
        id_span.html(error);
    } else {
        id_span.closest('.form-group').removeClass('has-error');
        id_span.closest('.form-group').addClass('has-success');
        id_span.html("");
    }

}
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: botones estado activo/inactivo ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
if ($('#estado').val() == "A") {
    activo();
} else {
    inactivo();
}

// click btn activo
$('#btn_activo').click(function(){
    
    activo();

});

// click btn inactivo
$('#btn_inactivo').click(function(){

    inactivo();

});

function activo(){

    $('#btn_activo').removeClass('btn-default');
    $('#btn_activo').addClass('btn-primary');
    
    $('#btn_inactivo').removeClass('btn-primary');
    $('#btn_inactivo').addClass('btn-default');

    $('#estado').val($('#btn_activo').data("valor"));

}

function inactivo(){

    $('#btn_inactivo').removeClass('btn-default');
    $('#btn_inactivo').addClass('btn-primary');
    
    $('#btn_activo').removeClass('btn-primary');
    $('#btn_activo').addClass('btn-default');

    $('#estado').val($('#btn_inactivo').data("valor"));

}
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
// ::::::::::::::::::::::::::::::::::::::::::::::::: cargar select anidados regiones, provincia y comuna :::::::::::::::::::::::::::::::::::::::::::::::::
// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

$('#region').change(function () {
    
    var id_region = $(this).val();

    if (id_region != '') {
        $('#provincia option').remove();

        $.ajax({
            url: main.bs + 'main/loadProvincia',
            type: 'POST',
            data: {region_id: id_region},
            dataType: 'json',
        })
        .done(function(data) {
            var provicias = data;
            for (var i = 0; i < provicias.length; i++) {
                var option = '<option value="'+ provicias[i].id +'">'+ provicias[i].provincia +'</option>';
                $('#provincia').append(option);
                $('#provincia').focus();
            }
        })
        .fail(function() {
            alert("Error al cargar las provincias");
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    }else{
        $('#provincia option').remove();
        $('#comuna option').remove();
    }

});

$('#provincia').on('focus change', function () {
    
    var id_provincia = $(this).val();

    if (id_provincia != '') {

        $('#comuna option').remove();

        $.ajax({
            url: main.bs + 'main/loadComuna',
            type: 'POST',
            data: {provincia_id: id_provincia},
            dataType: 'json',
        })
        .done(function(data) {
            
            var comuna = data;

            for (var i = 0; i < comuna.length; i++) {
                var option = '<option value="'+ comuna[i].id +'">'+ comuna[i].comuna +'</option>';
                $('#comuna').append(option);
                // $('#comuna').focus();
            }
        })
        .fail(function() {
            alert("Error al cargar las comunas");
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });

    }else{
        $('#comuna option').remove();
    }

});

