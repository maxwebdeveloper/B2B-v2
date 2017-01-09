<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Lista de Fichas de Evaluación</h1>
			
			<!-- <?php //print_r($fichas); ?> -->

            <table class="table table-hover small">
            	<thead>
            		<tr>
            			<th>ID</th>
            			<th>Producto</th>
            			<th>Fecha de Cración</th>
            			<th>Estado</th>
            			<th>Acción</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php foreach ($fichas as $f): ?>
            		<tr>
            			<td><?= $f->id; ?></td>
            			<td><?= $f->nombre_producto; ?></td>
            			<td><?= $f->fecha_creacion; ?></td>
            			<td><?= $f->fecha_creacion; ?></td>
            			<td>
            				<a href="<?= base_url(); ?>ficha/detalle_ficha_proveedor/<?= $f->id; ?>" class="btn btn-xs btn-info">Ver Detalle</a>
            				<a href="" class="btn btn-xs btn-danger">Eliminar</a>
            			</td>
            		</tr>
            		<?php endforeach ?>
            	</tbody>
            </table>

        </div>
    </div>
</div>
