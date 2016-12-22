<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nuevo Usuario</h3>
                </div>
                <div class="panel-body">
                    
                    <form method="post" action="" class="form-horizontal">

                        <div class="row">
                            <div class="col-md-6">

                                <!-- nombre -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del usuario" required>
                                    </div>
                                </div>

                                <!-- direccion -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Dirección</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion del usuario" required>
                                    </div>
                                </div>

                                <!-- telefono -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Teléfono</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono del usuario" required>
                                    </div>
                                </div>

                                <!-- email -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-mail</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el email del usuario" required>
                                    </div>
                                </div>

                                

                            </div>
                            <div class="col-md-6">
                                
                                <!-- password -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Ingrese una password de usuario" required>
                                    </div>
                                </div>

                                <!-- re-password -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Re-Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="re-password" name="re-password" placeholder="Ingrese nuevamente la password del usuario" required>
                                    </div>
                                </div>

                                <!-- empresa -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Empresa</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="empresa" name="empresa" required>
                                            <option>Seleccione la empresa</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- tipo -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tipo Usuario</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="tipo" name="tipo" required>
                                            <option>Seleccione el tipo de usuario</option>
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