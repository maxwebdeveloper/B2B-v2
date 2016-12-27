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
	$('#nombre').html(fila.data('nombre'));
	$('#direccion').html(fila.data('direccion'));
	$('#fono').html(fila.data('fono'));
	$('#correo').html(fila.data('correo'));
	$('#estado').html(fila.data('estado'));
	$('#empresa').html(fila.data('empresa'));
	$('#tipo').html(fila.data('tipo'));


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
        nombre: {
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
    },
    messages: {
        nombre: {
            required: "Ingresa el nombre de la persona",
            minlength: "El nombre no puede tener menos de 3 caracteres",
            maxlength: "El nombre no puede tener más de 45 caracteres"
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
$('#form_editar_usuario').validate( {

    rules: {
        nombre: {
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
            required: false,
            minlength: 3,
            maxlength: 45
        },
        re_password: {
            required: false,
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
    },
    messages: {
        nombre: {
            required: "Ingresa el nombre de la persona",
            minlength: "El nombre no puede tener menos de 3 caracteres",
            maxlength: "El nombre no puede tener más de 45 caracteres"
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
            minlength: "El password no puede tener menos de 3 caracteres",
            maxlength: "El password no puede tener más de 45 caracteres"
        },
        re_password: {
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
