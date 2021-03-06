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
                			<th>Estado JP</th>
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

                            <?php
                            
                            switch ($f->estado_comprador) {
                                case 0:
                                    // sin revisar
                                    echo '<td><span class="label label-primary">No Revisado</span></td>';
                                    break;
                                case 1:
                                    // revisado y no enviado
                                    echo '<td><span class="label label-default">No Enviado</span></td>';
                                    break;
                                case 2:
                                    // enviado a jp
                                    echo '<td><span class="label label-success">Enviado</span></td>';
                                    break;
                            }
                            switch ($f->estado_jefe_producto) {
                                case -1:
                                    // sin revisar
                                    echo '<td class="text-center">-</td>';
                                    break;
                                case 0:
                                    // sin revisar
                                    echo '<td class="text-center"><span class="label label-warning">Pendiente</span></td>';
                                    break;
                                case 1:
                                    // revisado
                                    echo '<td class="text-center"><span class="label label-info">Revisada</span></td>';
                                    break;
                                case 2:
                                    // enviado a jp
                                    echo '<td class="text-center"><span class="label label-success">Aceptada</span></td>';
                                    break;
                            }

                            ?>
                        
                            <td>
                                <?php 

                                switch ($f->estado_comprador) {
                                    case 0:
                                        // sin revisar 
                                        
                                ?>
                                    <!-- btn ver detalle -->
                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_comprador/<?= $f->id; ?>" class="btn btn-xs btn-info" title="Detalle">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <!-- btn editar -->
                                    <a href="<?= base_url(); ?>ficha/crear_ficha_comprador/<?= $f->id; ?>" class="btn btn-xs btn-primary" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>

                                    <!-- btn rechazar -->
                                    <button type="button" class="btn btn-xs btn-danger btn_rechazar" title="Rechazar Ficha">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                    </button>

                                 <?php
                                        break;
                                    case 1:
                                        // revisado
                                 ?>
                                    <!-- btn enviar a jp -->
                                    <button type="button" class="btn btn-xs btn-success btn_enviar_comprador" title="Enviar para evaluación a JP">
                                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    </button>

                                    <!-- btn ver detalle -->
                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_comprador/<?= $f->id; ?>" class="btn btn-xs btn-info" title="Detalle">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>

                                    <!-- btn editar -->
                                    <!-- <a href="<?= base_url(); ?>ficha/crear_ficha_comprador/<?= $f->id; ?>" class="btn btn-xs btn-primary" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a> -->

                                    <!-- btn rechazar -->
                                    <button type="button" class="btn btn-xs btn-danger btn_rechazar" title="Rechazar Ficha">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                    </button>

                                 <?php
                                        break;
                                    case 2:
                                        // enviado a jp
                                ?>
                                    <!-- btn ver detalle -->
                                    <a href="<?= base_url(); ?>ficha/detalle_ficha_comprador/<?= $f->id; ?>" class="btn btn-xs btn-info" title="Detalle">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                 <?php
                                        break;
                                }

                                ?>
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