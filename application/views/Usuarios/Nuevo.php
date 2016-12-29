<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Usuario</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="<?= base_url(); ?>usuarios/insertar" class="form-horizontal" id="form_nuevo_usuario">

                        <div class="row">
                            <div class="col-md-6">

                                <!-- nombre -->
                                <div class="form-group <?php if (form_error('nombre')){echo "has-error";} ?>" >
                                    <label class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('nombre'); ?>" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario" required>
                                        <?= form_error('nombre', '<span id="" class="help-block">', '</span>'); ?>
                                    </div>
                                </div>

                                <!-- apellido -->
                                <div class="form-group <?php if (form_error('apellido')){echo "has-error";} ?>" >
                                    <label class="col-sm-3 control-label">Apellido</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('apellido'); ?>" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellido del usuario" required>
                                        <?= form_error('apellido', '<span id="" class="help-block">', '</span>'); ?>
                                    </div>
                                </div>

                                <!-- direccion -->
                                <div class="form-group <?php if (form_error('direccion')){echo "has-error";} ?>">
                                    <label class="col-sm-3 control-label">Dirección</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('direccion'); ?>" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion del usuario" required>
                                        <?= form_error('direccion', '<span id="" class="help-block">', '</span>'); ?>
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
                                                echo '<option value="'.$r->id.'">'.$r->region.'</option>';
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
                                        </select>
                                    </div>
                                </div>

                                <!-- comuna -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Comuna</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="comuna" name="comuna" required>
                                            <option value="">Seleccione la comuna</option>
                                        </select>
                                    </div>
                                </div>


                                

                            </div>
                            <div class="col-md-6">
                                
                                <!-- telefono -->
                                <div class="form-group <?php if (form_error('telefono')){echo "has-error";} ?>">
                                    <label class="col-sm-3 control-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('telefono'); ?>" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono del usuario" required>
                                        <?= form_error('telefono', '<span id="" class="help-block">', '</span>'); ?>
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="form-group <?php if (form_error('email')){echo "has-error";} ?>">
                                    <label class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('email'); ?>" class="form-control" id="email" name="email" placeholder="Ingrese el email del usuario" required>
                                        <?= form_error('email', '<span id="" class="help-block">', '</span>'); ?>
                                    </div>
                                </div>

                                <!-- password -->
                                <div class="form-group <?php if (form_error('password')){echo "has-error";} ?>">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('password'); ?>" class="form-control" id="password" name="password" placeholder="Ingrese una password de usuario" required>
                                        <?= form_error('password', '<span id="" class="help-block">', '</span>'); ?>
                                    </div>
                                </div>

                                <!-- re_password -->
                                <div class="form-group <?php if (form_error('re_password')){echo "has-error";} ?>">
                                    <label class="col-sm-3 control-label">Re-password</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="<?= set_value('re_password'); ?>" class="form-control" id="re_password" name="re_password" placeholder="Ingrese nuevamente la password del usuario" required>
                                        <?= form_error('re_password', '<span id="" class="help-block">', '</span>'); ?>
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
                                                echo '<option value="'.$e->id.'">'.$e->nombre.'</option>';
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
                                            <option value="">Seleccione el tipo de usuario</option>
                                            <?php
                                            foreach ($tipo_usuario as $tu) {
                                                echo '<option value="'.$tu->id.'">'.$tu->nombre.'</option>';
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
                                        <button type="submit" class="btn btn-success">Guardar</button>
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