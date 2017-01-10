<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Lista de Fichas de Evaluación</h1>
            <hr>
            <?php if ($fichas != false): ?>

                <table id="tb_fichas" class="table table-hover ">
                	<thead>
                		<tr>
                			<th>ID</th>
                			<th>Producto</th>
                            <th>Fecha de Cración</th>
                			<th>Proveedor</th>
                            <th>Estado</th>
                			<th>Estado Solicitud</th>
                			<th>Acción</th>
                		</tr>
                	</thead>
                	<tbody>
                		<?php foreach ($fichas as $f): ?>
                		<tr data-id="<?= $f->id; ?>">
                			<td><?= $f->id; ?></td>
                			<td><?= $f->nombre_producto; ?></td>
                            <td><?= $f->fecha_creacion; ?></td>
                			<td><?= $f->proveedor; ?></td>

                            <?php if ($f->estado_jefe_producto == 0): ?>
                                <td><span class="label label-warning">Sin Revisar</span></td>
                            <?php else: ?>
                                <td><span class="label label-success">Aprobada</span></td>
                            <?php endif ?>
                            <td class="text-center">-</td>
                			<td>

                                <?php if ($f->estado_proveedor != 0): ?>
                                    <button type="button" class="btn btn-xs btn-success btn_enviar" title="Enviar para evaluación"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>

                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_proveedor/<?= $f->id; ?>" class="btn btn-xs btn-info" title="Detalle">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?= base_url(); ?>ficha/crear_ficha_jp/<?= $f->id; ?>" class="btn btn-xs btn-primary" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>

                                    <button type="button" class="btn btn-xs btn-danger btn_eliminar" title="Eliminar">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                <?php else: ?>
                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_proveedor/<?= $f->id; ?>" class="btn btn-xs btn-info" title="Detalle">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                <?php endif ?>
                			</td>
                		</tr>
                		<?php endforeach ?>
                	</tbody>
                </table>
            
            <?php else: ?>
                <?php echo "No hay datos que mostrar." ?>
            <?php endif ?>

        </div>
    </div>
</div>