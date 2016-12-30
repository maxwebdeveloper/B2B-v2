        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/backoffice.js"></script>
        
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>assets/jquery-tabledit-1.2.3/jquery.tabledit.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/usuarios.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {

            // objeto que contiene las variables globales
            var main = {
                bs : $('#main').data('bs')
            };

            // datatable usuarios
            // $('#tb_empresas').DataTable({
            //     "language": {
            //         url : 'http://cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
            //     }
            // });

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
                		    
		});
        </script>

    </body>
</html>
