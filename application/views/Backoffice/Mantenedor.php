<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-12">

			<?php
			$correcto = $this->session->flashdata('result_usuario');
			if ($correcto) {
				echo $correcto;
			}
			?>

			<div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#tab_empresa" aria-controls="tab_empresa" role="tab" data-toggle="tab">Empresas</a></li>
					<li role="presentation"><a href="#tab_tipo_usuario" aria-controls="tab_tipo_usuario" role="tab" data-toggle="tab">Tipo de Usuario</a></li>
					<li role="presentation"><a href="#tab_formato_consumo" aria-controls="tab_formato_consumo" role="tab" data-toggle="tab">Formato de consumo</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">

					<!-- mantenedor empresa -->
					<div role="tabpanel" class="tab-pane active" id="tab_empresa">

						<div class="container" style="margin-top: 20px;">
							
							<!-- formulario nueva empresa -->
							<div class="row">
								
								<div class="col-md-12">
								
									<h3 class="sub-header">Nueva Empresa</h3>

									<form id="form_nueva_empresa" method="post" action="" class="form-horizontal">
										<div class="form-group">
											<label for="" class="label-control col-sm-2">Nombre Empresa</label>
											<div class="col-sm-5 input-group">
												<input type="text" id="man_empresa" name="man_empresa" minlength="3" maxlength="45" class="form-control" placeholder="Ingrese el nombre de la empresa" required="">
												<span class="input-group-btn">
													<button class="btn btn-success" type="submit">Agregar</button>
											    </span>
											</div>
										</div>
									</form>	

								</div>
							</div>

							<!-- tabla lista de empresas -->
							<div class="row">
								<div class="col-md-12">
									
									<h3 class="sub-header">Lista de Empresas</h3>
									
									<table id="tb_empresas" class="table table-hover table-striped table-bordered">
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
												<td><?= $e->id; ?></td>
												<td><?= $e->nombre; ?></td>
												<td><?= $e->estado; ?></td>
											</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>

						</div>
						
					</div>

					<!-- mantenedor tipo_usuario -->
					<div role="tabpanel" class="tab-pane" id="tab_tipo_usuario">

						<div class="container" style="margin-top: 20px;">
							
							<!-- formulario nuevo tipo de usuario -->
							<div class="row">
								
								<div class="col-md-12">
								
									<h3 class="sub-header">Nuevo Tipo de Usuario</h3>

									<form id="form_nueva_tipo" method="post" action="" class="form-horizontal">
										<div class="form-group">
											<label for="" class="label-control col-sm-2">Tipo Usuario</label>
											<div class="col-sm-5 input-group">
												<input type="text" id="man_tipo_usuario" name="man_tipo_usuario" minlength="3" maxlength="45" class="form-control" placeholder="Ingrese el tipo de usuario" required="">
												<span class="input-group-btn">
													<button class="btn btn-success" type="submit">Agregar</button>
											    </span>
											</div>
										</div>
									</form>	

								</div>
							</div>

							<!-- tabla lista de tipos de usuario -->
							<div class="row">
								<div class="col-md-12">
									
									<h3 class="sub-header">Lista de Tipos de Usuario</h3>
									
									<table id="tb_tipo_usuario" class="table table-hover table-striped table-bordered">
										<thead>
											<tr>
												<th>ID</th>
												<th>Tipo Usuario</th>
												<th>Estado</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($tipo_usuario as $t): 
												if ($t->estado == "A") {
													$t->estado = "Activo";
												}else{
													$t->estado = "Inactivo";
												}
											?>
											<tr>
												<td><?= $t->id; ?></td>
												<td><?= $t->nombre; ?></td>
												<td><?= $t->estado; ?></td>
											</tr>
											<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
							
						</div>
						

					</div>

					<!-- mantenedor formato de consumo -->
					<div role="tabpanel" class="tab-pane" id="tab_formato_consumo">
						
						<div class="container" style="margin-top: 20px;">
							
							<!-- formulario nuevo formato de consumo -->
							<div class="row">
								
								<div class="col-md-12">
								
									<h3 class="sub-header">Nuevo Formato de Consumo</h3>

									<form id="form_nueva_tipo" method="post" action="" class="form-horizontal">
										<div class="form-group">
											<label for="" class="label-control col-sm-2">Formato de consumo</label>
											<div class="col-sm-5 input-group">
												<input type="text" id="man_formato" name="man_formato" minlength="3" maxlength="45" class="form-control" placeholder="Ingrese el nombre del formato" required="">
												<span class="input-group-btn">
													<button class="btn btn-success" type="submit">Agregar</button>
											    </span>
											</div>
										</div>
									</form>	

								</div>
							</div>

							<!-- tabla lista de formatos de consumo -->
							<div class="row">
								<div class="col-md-12">
									
									<h3 class="sub-header">Lista de Formatos de Consumo</h3>

									<?php if ($formato_consumo != null): ?>
										
										<table id="tb_tipo_usuario" class="table table-hover table-striped table-bordered">
											<thead>
												<tr>
													<th>ID</th>
													<th>Formato</th>
													<th>Estado</th>
												</tr>
											</thead>
											<tbody>
													
												<?php foreach ($formato_consumo as $f): 
													if ($f->estado == "A") {
														$f->estado = "Activo";
													}else{
														$f->estado = "Inactivo";
													}
												?>
												<tr>
													<td><?= $f->id; ?></td>
													<td><?= $f->nombre; ?></td>
													<td><?= $f->estado; ?></td>
												</tr>
												<?php endforeach ?>
											</tbody>
										</table>
										
									<?php else: ?>
										<?= "No hay datos que mostrar."; ?>
									<?php endif ?>
									
								</div>
							</div>
							
						</div>

					</div>
				</div>

			</div>

		</div>
	</div>

 
</div>