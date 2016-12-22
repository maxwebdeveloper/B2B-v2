// datatable usuarios
$('#tb_usuarios').DataTable({
    "language": {
    	url : 'http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
    }
});

// evento click sobre el boton con la clase btn_ver (ver detalle)
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
