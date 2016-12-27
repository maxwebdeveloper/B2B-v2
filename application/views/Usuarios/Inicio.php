<div class="container margin-top-100" >
    <div class="row">
        <div class="col-md-12">

            <?php
            $correcto = $this->session->flashdata('result_usuario');
            if ($correcto) {
                echo $correcto;
            }
            ?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title pull-left">Nuevo Usuario</h3>
                    <a href="<?= base_url(); ?>usuarios/nuevo" class="btn btn-success btn-xs pull-right">
                        <i class="fa fa-plus" aria-hidden="true"></i> Nuevo Usuario
                    </a>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    
                    <div class="table-responsive">
                        <table class="table table-hover" id="tb_usuarios">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Fono</th>
                                    <th>Correo</th>
                                    <th>Estado</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                
                                if ($usuarios == false) {
                                    echo "No hay datos que mostrar";
                                } else {
                                    
                                    foreach ($usuarios as $usuario) {
                                        
                                            
                                        if ($usuario->estado == 'A') {
                                            $estado = "<span class='label label-success'>ACTIVO</span>";
                                        } else {
                                            $estado = "<span class='label label-danger'>INACTIVO</span>";
                                        }
                                        
                                        echo '<tr data-id="'.$usuario->id.'" data-nombre="'.$usuario->nombre.'" data-direccion="'.$usuario->direccion.'" data-fono="'.$usuario->fono.'" data-correo="'.$usuario->correo.'" data-estado="'.$estado.'" data-empresa="'.$usuario->	empresa.'" data-tipo="'.$usuario->tipo.'" data-bs="'.base_url().'">';
                                        
                                        echo '<td>'.$usuario->nombre.'</td>';
                                        echo '<td>'.$usuario->direccion.'</td>';
                                        echo '<td>'.$usuario->fono.'</td>';
                                        echo '<td>'.$usuario->correo.'</td>';
                                        echo '<td>'.$estado.'</td>';
                                        echo '<td>
                                            <button type="button" class="btn btn-xs btn-info btn_ver" title="Detalle" data-toggle="modal" data-target="#detalleUsuario"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            <a href="'.base_url().'usuarios/editar/'.$usuario->id.'" class="btn btn-xs btn-primary" title="Editar información de usuario"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <button type="button" class="btn btn-xs btn-danger btn_eliminar" title="Eliminar" data-toggle="modal" data-target="#eliminarUsuario"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>';
                                        echo '</tr>';
                                    }

                                }
                                
                                ?>
                            </tbody>
                            
                        </table>
                    </div>

                    <!-- Modal detalle-->
                    <div class="modal fade" id="detalleUsuario" tabindex="-1" role="dialog" aria-labelledby="detalleUsuarioLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="detalleUsuarioLabel">Detalle de Usuario</h4>
                                </div>
                                <div class="modal-body">

                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Nombre</th>
                                                <td id="nombre"></td>
                                            </tr>
                                            <tr>
                                                <th>Dirección</th>
                                                <td id="direccion"></td>
                                            </tr>
                                            <tr>
                                                <th>Fono</th>
                                                <td id="fono"></td>
                                            </tr>
                                            <tr>
                                                <th>Correo</th>
                                                <td id="correo"></td>
                                            </tr>
                                            <tr>
                                                <th>Estado</th>
                                                <td id="estado"></td>
                                            </tr>
                                            <tr>
                                                <th>Empresa</th>
                                                <td id="empresa"></td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de Usuario</th>
                                                <td id="tipo"></td>
                                            </tr>


                                        </tbody>
                                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal eliminar-->
                    <div class="modal fade" id="eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="eliminarUsuarioLabel">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="eliminarUsuarioLabel">Eliminar Usuario</h4>
                                </div>
                                <div class="modal-body">

                                    <p id="mensaje_eliminar"></p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <a href="" class="btn btn-danger" id="confirmar">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</div>