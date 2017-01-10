<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Detalle Ficha de Evaluación</h1>
			
			<hr>

			<div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation">
						<a href="#tab_proveedor" aria-controls="tab_proveedor" role="tab" data-toggle="tab">Datos Proveedor</a>
					</li>
					<li role="presentation" class="active">
						<a href="#tab_comprador" aria-controls="tab_comprador" role="tab" data-toggle="tab">Datos Comprador</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content" style="margin-top: 25px;">
					<div role="tabpanel" class="tab-pane" id="tab_proveedor">

						<div class="row">
							<div class="col-md-3">
								
								<!-- Comprador -->
				            	<div class="form-group">
				            		<label class="label-control">Comprador</label>
				            		<input type="" name="" value="<?= $ficha->comprador; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Nombre Producto -->
				            	<div class="form-group">
				            		<label class="label-control">Nombre Producto</label>
				        			<input type="text" name="nombre" id="nombre" value="<?= $ficha->nombre_producto; ?>" class="form-control" maxlength="85" placeholder="Ingrese nombre del producto" readonly="" required="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Marca -->
				            	<div class="form-group">
				            		<label class="label-control">Marca Producto</label>
				        			<input type="text" name="marca" id="marca" value="<?= $ficha->marca_producto; ?>" class="form-control" maxlength="45" placeholder="Ingrese la marca del producto" readonly="" required="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Formato de Venta -->
				            	<div class="form-group">
				            		<label class="label-control">Formato de Venta</label>
				        			<input type="" name="" value="<?= $ficha->formato_consumo; ?>" class="form-control" readonly="">
				            	</div>

							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								
				            	<!-- contenido -->
				            	<div class="form-group">
				            		<label class="label-control">Contenido</label>
				        			<input type="" name="" value="<?= $ficha->contenido; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- cantidad -->
				            	<div class="form-group">
				            		<label class="label-control">Cantidad</label>
				        			<input type="" name="" value="<?= $ficha->cantidad; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- precio_lista -->
				            	<div class="form-group">
				            		<label class="label-control">Precio Lista</label>
				        			<input type="" name="" value="<?= $ficha->precio_lista; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Precio venta -->
				            	<div class="form-group">
				            		<label class="label-control">Posicionamiento Precio Deseado</label>
				        			<input type="" name="" value="<?= $ficha->ppd; ?>" class="form-control" readonly="">
				            	</div>

							</div>
						</div>

			        	<div class="row">
			        		<div class="col-md-12">
			        			<table class="table">
			        				<thead>
			        					<tr>
			        						<th>Nº Descuentos (max 5)</th>
			        						<th colspan="5" class="text-center">Descuentos</th>
			        					</tr>
			        				</thead>
			        				<tbody>
			        					<tr>
			        						<td>
			        							<input type="" name="" value="<?= $ficha->num_descuento; ?>" class="form-control" readonly="">
			        						</td>
			        						<td><input type="" name="" value="<?= $ficha->descuento_1; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->descuento_2; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->descuento_3; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->descuento_4; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->descuento_5; ?>" class="form-control" readonly=""></td>
			        					</tr>
			        				</tbody>
			        			</table>
			        		</div>
			        	</div>

			        	<div class="row">
			        		<div class="col-md-12">
			        			<table class="table">
			        				<thead>
			        					<tr>
			        						<th>Nº Variedades (max 5)</th>
			        						<th colspan="5" class="text-center">Variedades</th>
			        					</tr>
			        				</thead>
			        				<tbody>
			        					<tr>
			        						<td>
			        							<input type="" name="" value="<?= $ficha->num_variedades; ?>" class="form-control" readonly="">
			        						</td>
			        						<td><input type="" name="" value="<?= $ficha->variedad_1; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->variedad_2; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->variedad_3; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->variedad_4; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha->variedad_5; ?>" class="form-control" readonly=""></td>
			        					</tr>
			        				</tbody>
			        			</table>
			        		</div>
			        	</div>

			        	<div class="row">
			        		<div class="col-md-6">

				            	<!-- Atributos -->
				            	<div class="form-group">
				            		<label class="label-control">Atributos principales</label>
				        			<textarea rows="4" maxlength="250" name="atributo" id="atributo" class="form-control" maxlength="" placeholder="Ingrese los atributos del producto" readonly="" required=""><?= $ficha->atributos; ?></textarea>
				            	</div>
			        			
			        		</div>
			        		<div class="col-md-6">
			        			
								<!-- Beneficios -->
				            	<div class="form-group">
				            		<label class="label-control">Beneficios</label>
				        			<textarea rows="4" maxlength="250" name="beneficios" id="beneficios" class="form-control" maxlength="" placeholder="Ingrese los beneficios del producto" readonly="" required=""><?= $ficha->beneficios; ?></textarea>
				            	</div>

			        		</div>
			        	</div>


					</div>
					<div role="tabpanel" class="tab-pane active" id="tab_comprador">
						

						<div class="row">
							<div class="col-md-6">
								
								<!-- Jefe Producto -->
				            	<div class="form-group">
				            		<label class="label-control">Jefe Producto</label>
				            		<input type="" name="" value="<?= $ficha->jefe_producto; ?>" class="form-control" readonly="">
				            	</div>

							</div>

							<div class="col-md-3">
	
								<!-- margen_espol -->
								<div class="form-group">
									<label for="" class="label-control">Margen Esperado Espol</label>
									<input type="" name="" value="<?= $ficha->margen_espol; ?>" class="form-control" readonly="">
								</div>

							</div>
							<div class="col-md-3">

								<!-- margen_estimado_cliente -->
								<div class="form-group">
									<label for="" class="label-control">Margen Estimado Cliente</label>
									<input type="" name="" value="<?= $ficha->margen_estimado_cliente; ?>" class="form-control" readonly="">
								</div>

							</div>
							
						</div>

						<div class="row">
							<div class="col-md-3">
								
								<!-- pvp_proyectado -->
								<div class="form-group">
									<label for="" class="label-control">PVP Proyectado</label>
									<input type="" name="" value="<?= $ficha->pvp_proyectado; ?>" class="form-control" readonly="">
								</div>
								
							</div>
							<div class="col-md-3">

								<!-- estimacion_m3 -->
								<div class="form-group">
									<label for="" class="label-control">Estimación M3</label>
									<input type="" name="" value="<?= $ficha->estimacion_m3; ?>" class="form-control" readonly="">
								</div>
							</div>
							<div class="col-md-3">
								
								<!-- plazo_pago_proveedor -->
								<div class="form-group">
									<label for="" class="label-control">Plazo Pago Proveedor</label>
									<input type="" name="" value="<?= $ficha->plazo_pago_proveedor; ?>" class="form-control" readonly="">
								</div>
								
							</div>
							<div class="col-md-3">
								
								<!-- escala_descuento_ipad -->
								<div class="form-group">
									<label for="" class="label-control">Escala Descuento Ipad</label>
									<input type="" name="" value="<?= $ficha->escala_descuento_ipad; ?>" class="form-control" readonly="">
								</div>
								
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">

								<!-- negociacion_especial_merma -->
								<div class="form-group">
									<label for="" class="label-control">Negociación Especial Merma</label>
									<textarea class="form-control" readonly=""><?= $ficha->negociacion_especial_merma; ?></textarea>

								</div>
								
							</div>
							<div class="col-md-4">
								
								<!-- negociacion_devoluciones -->
								<div class="form-group">
									<label for="" class="label-control">Negociación Por Devolución</label>
									<textarea class="form-control" readonly=""><?= $ficha->negociacion_devoluciones; ?></textarea>
								</div>

							</div>
							<div class="col-md-4">
								
								<!-- aportes_especiales_proveedor -->
								<div class="form-group">
									<label for="" class="label-control">Aportes Especiales Proveedor</label>
									<textarea class="form-control" readonly=""><?= $ficha->aportes_especiales_proveedor; ?></textarea>
								</div>

							</div>
						</div>
						
					</div>
				</div>

				<div class="text-center">

					<a href="<?= base_url().'ficha/crear_ficha_comprador/'.$ficha->id ?>" class="btn btn-primary">Editar</a>
					<a href="<?= base_url(); ?>ficha/ver_ficha_comprador" class="btn btn-default">Volver</a>
					
				</div>

			</div>

        </div>
    </div>
</div>