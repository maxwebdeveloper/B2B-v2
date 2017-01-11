<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Lista de Fichas de Evaluación</h1>
			<hr>
			<?php if ($fichas != false): ?>
                
                <table id="tb_fichas" class="table table-hover ">
                	<thead>
                		<tr>
                			<th>ID Ficha</th>
                			<th>Producto</th>
                			<th>Fecha de Cración</th>
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

                            <?php if ($f->estado_proveedor == 0): ?>
                                <td><span class="label label-default">No Enviado</span></td>
                            <?php else: ?>
                                <td><span class="label label-success">Enviado</span></td>
                            <?php endif ?>

                            <td><?= $f->estado_solicitud; ?></td>

                            <?php
                            
                            // switch ($f->estado_comprador) {
                            //     case -1:
                            //         // sin revisar
                            //         echo '<td class="text-center">-</td>';
                            //         break;
                            //     case 0:
                            //         // sin revisar
                            //         echo '<td class="text-center"><span class="label label-warning">Pendiente</span></td>';
                            //         break;
                            //     case 1:
                            //         // revisado
                            //         echo '<td class="text-center"><span class="label label-info">Revisado</span></td>';
                            //         break;
                            //     case 2:
                            //         // enviado a jp
                            //         echo '<td class="text-center"><span class="label label-success">Aceptado</span></td>';
                            //         break;
                            // }

                            // switch ($f->estado_jefe_producto) {
                            //     case -1:
                            //         // sin revisar
                            //         echo '<td class="text-center">-</td>';
                            //         break;
                            //     case 0:
                            //         // sin revisar
                            //         echo '<td class="text-center"><span class="label label-warning">Pendiente</span></td>';
                            //         break;
                            //     case 1:
                            //         // revisado
                            //         echo '<td class="text-center"><span class="label label-info">Revisado</span></td>';
                            //         break;
                            //     case 2:
                            //         // enviado a jp
                            //         echo '<td class="text-center"><span class="label label-success">Aceptado</span></td>';
                            //         break;
                            // }

                            ?>
                            
                			<td>
                                <!-- si el estado_proveedor es 0 aun puede editar y eliminar la ficha
                                de lo contrario solo podra verla -->
                                <?php if ($f->estado_proveedor == 0): ?>

                                    <button type="button" class="btn btn-xs btn-success btn_enviar_proveedor" title="Enviar para evaluación"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>

                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_proveedor/<?= $f->id; ?>" class="btn btn-xs btn-info" title="Detalle">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_proveedor/<?= $f->id; ?>" class="btn btn-xs btn-primary" title="Editar">
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
                <?php echo "No hay datos que mostrar."; ?>
            <?php endif ?>


        </div>
    </div>
</div>