<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Editar Datos de Usuario</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="<?= base_url(); ?>usuarios/actualizar" class="form-horizontal" id="form_editar_usuario">

                        <div class="row">
                            <div class="col-md-6">

                                <!-- rut -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Rut</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->rut; ?>" id="rut" name="rut" placeholder="Ingrese el rut del usuario" required>
                                        <span id="msg_rut" class="help-block"></span>
                                    </div>
                                </div>

                                <!-- nombre -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->nombre; ?>" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario" required>
                                        <span id="msg_nombre" class="help-block"></span>
                                    </div>
                                </div>

                                <!-- apellido -->
                                <div class="form-group <?php if (form_error('apellido')){echo "has-error";} ?>" >
                                    <label class="col-sm-3 control-label">Apellido</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= $usuario->apellido; ?>" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido del usuario" required>
                                        <span id="msg_apellido" class="help-block"></span>
                                    </div>
                                </div>

                                <!-- direccion -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Dirección</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->direccion; ?>" id="direccion" name="direccion" placeholder="Ingrese la direccion del usuario" required>
                                        <span id="msg_direccion" class="help-block"></span>
                                    </div>
                                </div>


                                <!-- region -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Región</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="region" name="region" required>
                                            <option value="">Seleccione la region</option>
                                            <?php
                                            foreach ($regiones as $r) {

                                                if ($r->id == $usuario->id_region) {
                                                    echo '<option value="'.$r->id.'" selected>'.$r->region.'</option>';
                                                } else {
                                                    echo '<option value="'.$r->id.'">'.$r->region.'</option>';
                                                }

                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- provincia -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Provincia</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="provincia" name="provincia" required>
                                            <option value="">Seleccione la provincia</option>
                                            <?php
                                            foreach ($provincias as $p) {

                                                if ($p->id == $usuario->id_provincia) {
                                                    echo '<option value="'.$p->id.'" selected>'.$p->provincia.'</option>';
                                                } else {
                                                    echo '<option value="'.$p->id.'">'.$p->region.'</option>';
                                                }

                                            } 
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- comuna -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Comuna</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="comuna" name="comuna" required>
                                            <option value="">Seleccione la comuna</option>
                                            <?php
                                            foreach ($comunas as $c) {

                                                if ($c->id == $usuario->id_comuna) {
                                                    echo '<option value="'.$c->id.'" selected>'.$c->comuna.'</option>';
                                                } else {
                                                    echo '<option value="'.$c->id.'">'.$c->region.'</option>';
                                                }

                                            } 
                                            ?>
                                        </select>
                                        <span id="msg_comuna" class="help-block"></span>
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

                                <!-- telefono -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->fono; ?>" id="telefono" name="telefono" placeholder="Ingrese el telefono del usuario" required>
                                        <span id="msg_telefono" class="help-block"></span>
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="<?= $usuario->correo; ?>" id="email" name="email" placeholder="Ingrese el email del usuario" required>
                                        <span id="msg_email" class="help-block"></span>
                                    </div>
                                </div>

                                
                                <!-- password -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" id="password" name="password" placeholder="Ingrese una password de usuario" >
                                        <span id="msg_password" class="help-block"></span>
                                    </div>
                                </div>

                                <!-- re-password -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Re-Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" id="re-password" name="re-password" placeholder="Ingrese nuevamente la password del usuario" >
                                        <span id="msg_re_password" class="help-block"></span>
                                    </div>
                                </div>

                                 <!-- empresa -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Empresa</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="empresa" name="empresa" required>
                                            <option value="">Seleccione la empresa</option>
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
                                        <span id="msg_empresa" class="help-block"></span>
                                    </div>
                                </div>

                                <!-- tipo -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tipo Usuario</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="tipo" name="tipo" required>
                                            <option value="">Seleccione el tipo de usuario</option>
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
                                        <span id="msg_tipo" class="help-block"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <input type="hidden" id="id" name="id" value="<?= $usuario->id; ?>">
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