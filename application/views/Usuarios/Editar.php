<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Editar Datos de Usuario</h3>
                </div>
                <div class="panel-body">
                    
                    <form method="post" action="" class="form-horizontal" id="form_editar_usuario">

                        <div class="row">
                            <div class="col-md-6">

                                <!-- nombre -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->nombre; ?>" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario" required>
                                    </div>
                                </div>

                                <!-- direccion -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Dirección</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->direccion; ?>" id="direccion" name="direccion" placeholder="Ingrese la direccion del usuario" required>
                                    </div>
                                </div>

                                <!-- telefono -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->fono; ?>" id="telefono" name="telefono" placeholder="Ingrese el telefono del usuario" required>
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->correo; ?>" id="email" name="email" placeholder="Ingrese el email del usuario" required>
                                    </div>
                                </div>

                                <!-- estado -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Estado</label>
                                    <div class="col-sm-9">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-primary" id="btn_activo" data-valor="A">ACTIVO</button>
                                            <button type="button" class="btn btn-sm btn-default" id="btn_inactivo" data-valor="I">INACTIVO</button>
                                            <input type="hidden" id="estado" name="estado" value="<?= $usuario->estado; ?>">
                                        </div>
                                    </div>
                                </div>

                                

                            </div>
                            <div class="col-md-6">
                                
                                <!-- password -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" id="password" name="password" placeholder="Ingrese una password de usuario" required>
                                    </div>
                                </div>

                                <!-- re-password -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Re-Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" id="re-password" name="re-password" placeholder="Ingrese nuevamente la password del usuario" required>
                                    </div>
                                </div>

                                 <!-- empresa -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Empresa</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="empresa" name="empresa" required>
                                            <option>Seleccione la empresa</option>
                                            <?php
                                            foreach ($empresas as $e) {

                                                if ($e->nombre === $usuario->empresa) {
                                                    echo '<option value="'.$e->id.'" selected>'.$e->nombre.'</option>';
                                                } else {
                                                    
                                                    echo '<option value="'.$e->id.'" >'.$e->nombre.'</option>';
                                                }
                                                
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- tipo -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tipo Usuario</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="tipo" name="tipo" required>
                                            <option>Seleccione el tipo de usuario</option>
                                            <?php
                                            foreach ($tipo_usuario as $tu) {

                                                if ($tu->nombre === $usuario->tipo) {
                                                    echo '<option value="'.$tu->id.'" selected>'.$tu->nombre.'</option>';
                                                } else {
                                                    echo '<option value="'.$tu->id.'">'.$tu->nombre.'</option>';
                                                }
                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-success">Guardar cambios</button>
                                        <a href="<?= base_url(); ?>usuarios/" class="btn btn-default">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>