<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-12">

			<div>

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#tab_empresa" aria-controls="tab_empresa" role="tab" data-toggle="tab">Empresas</a></li>
				<li role="presentation"><a href="#tab_tipo_usuario" aria-controls="tab_tipo_usuario" role="tab" data-toggle="tab">Tipo de Usuario</a></li>
				<li role="presentation"><a href="#tab_formato_consumo" aria-controls="tab_formato_consumo" role="tab" data-toggle="tab">Formato de consumo</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="tab_empresa">

					<div style="margin-top: 45px;">

						<h3 class="sub-header">Nueva Empresa</h3>

						<form id="" method="post" action="" class="form-horizontal">
							<div class="form-group">
								<label for="" class="label-control col-sm-2">Nombre Empresa</label>
								<div class="col-sm-4 input-group">
									<input type="text" id="empresa" name="empresa" class="form-control" placeholder="Ingrese el nombre de la empresa" required="">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Agregar</button>
								    </span>
								</div>
							</div>
						</form>

						<h3 class="sub-header">Lista de Empresas</h3>

						<table id="tb_empresas" class="table table-hover table-striped ">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Estado</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($empresas as $e): 
									if ($e->estado == "A") {
										$e->estado = "Activo";
									}else{
										$e->estado = "Inactivo";
									}
								?>
								<tr>
									<td><?php echo $e->id; ?></td>
									<td><?php echo $e->nombre; ?></td>
									<td><?php echo $e->estado; ?></td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					
					

				</div>
				<div role="tabpanel" class="tab-pane" id="tab_tipo_usuario">
					
					<form id="" method="post" action="" class="form-horizontal">
						<div class="form-group">
							<label for="" class="label-control col-sm-4">tab_tipo_usuario</label>
							<div class="col-sm-6">
								<input type="text" id="" name="" class="form-control" placeholder="" required="">
							</div>
						</div>
					</form>

				</div>
				<div role="tabpanel" class="tab-pane" id="tab_formato_consumo">
					
					<form id="" method="post" action="" class="form-horizontal">
						<div class="form-group">
							<label for="" class="label-control col-sm-4">tab_formato_consumo</label>
							<div class="col-sm-6">
								<input type="text" id="" name="" class="form-control" placeholder="" required="">
							</div>
						</div>
					</form>

				</div>
			</div>

			</div>

		</div>
	</div>

 
</div>