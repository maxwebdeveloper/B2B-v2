<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Formulario Ficha de Evaluación</h1>

			<p>A continuación deberá completar el formulario en la sección "Datos Comprador".</p>
			
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
				            		<input type="" name="" value="<?= $ficha_proveedor->comprador; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Nombre Producto -->
				            	<div class="form-group">
				            		<label class="label-control">Nombre Producto</label>
				        			<input type="text" name="nombre" id="nombre" value="<?= $ficha_proveedor->nombre_producto; ?>" class="form-control" maxlength="85" placeholder="Ingrese nombre del producto" readonly="" required="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Marca -->
				            	<div class="form-group">
				            		<label class="label-control">Marca Producto</label>
				        			<input type="text" name="marca" id="marca" value="<?= $ficha_proveedor->marca_producto; ?>" class="form-control" maxlength="45" placeholder="Ingrese la marca del producto" readonly="" required="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Formato de Venta -->
				            	<div class="form-group">
				            		<label class="label-control">Formato de Venta</label>
				        			<input type="" name="" value="<?= $ficha_proveedor->formato_consumo; ?>" class="form-control" readonly="">
				            	</div>

							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								
				            	<!-- contenido -->
				            	<div class="form-group">
				            		<label class="label-control">Contenido</label>
				        			<input type="" name="" value="<?= $ficha_proveedor->contenido; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- cantidad -->
				            	<div class="form-group">
				            		<label class="label-control">Cantidad</label>
				        			<input type="" name="" value="<?= $ficha_proveedor->cantidad; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- precio_lista -->
				            	<div class="form-group">
				            		<label class="label-control">Precio Lista</label>
				        			<input type="" name="" value="<?= $ficha_proveedor->precio_lista; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-3">
								
								<!-- Precio venta -->
				            	<div class="form-group">
				            		<label class="label-control">Posicionamiento Precio Deseado</label>
				        			<input type="" name="" value="<?= $ficha_proveedor->ppd; ?>" class="form-control" readonly="">
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
			        							<input type="" name="" value="<?= $ficha_proveedor->num_descuento; ?>" class="form-control" readonly="">
			        						</td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->descuento_1; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->descuento_2; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->descuento_3; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->descuento_4; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->descuento_5; ?>" class="form-control" readonly=""></td>
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
			        							<input type="" name="" value="<?= $ficha_proveedor->num_variedades; ?>" class="form-control" readonly="">
			        						</td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->variedad_1; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->variedad_2; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->variedad_3; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->variedad_4; ?>" class="form-control" readonly=""></td>
			        						<td><input type="" name="" value="<?= $ficha_proveedor->variedad_5; ?>" class="form-control" readonly=""></td>
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
				        			<textarea rows="4" maxlength="250" name="atributo" id="atributo" class="form-control" maxlength="" placeholder="Ingrese los atributos del producto" readonly="" required=""><?= $ficha_proveedor->atributos; ?></textarea>
				            	</div>
			        			
			        		</div>
			        		<div class="col-md-6">
			        			
								<!-- Beneficios -->
				            	<div class="form-group">
				            		<label class="label-control">Beneficios</label>
				        			<textarea rows="4" maxlength="250" name="beneficios" id="beneficios" class="form-control" maxlength="" placeholder="Ingrese los beneficios del producto" readonly="" required=""><?= $ficha_proveedor->beneficios; ?></textarea>
				            	</div>

			        		</div>
			        	</div>


					</div>
					<div role="tabpanel" class="tab-pane active" id="tab_comprador">
						
						<form method="post" action="<?= base_url(); ?>ficha/update_ficha_comprador">

							<div class="row">
								<div class="col-md-6">
									
									<!-- Jefe Producto -->
					            	<div class="form-group">
					            		<label class="label-control">Jefe Producto</label>
					            		<select name="jefe_producto" id="jefe_producto" class="form-control" required="">
					        				<?php foreach ($jefe_producto as $j): ?>
					        					<option value="<?= $j->id; ?>"><?= $j->nombre_completo; ?></option>
					        				<?php endforeach ?>
										</select>
					            	</div>

								</div>

								<div class="col-md-3">
		
									<!-- margen_espol -->
									<div class="form-group">
										<label for="" class="label-control">Margen Esperado Espol</label>
										<input type="text" name="margen_espol" id="margen_espol" value="" class="form-control" placeholder="Ingrese el margen esperado" required="">
									</div>

								</div>
								<div class="col-md-3">

									<!-- margen_estimado_cliente -->
									<div class="form-group">
										<label for="" class="label-control">Margen Estimado Cliente</label>
										<input type="text" name="margen_estimado_cliente" id="margen_estimado_cliente" value="" class="form-control" placeholder="Ingrese el margen de cliente" required="">
									</div>

								</div>
								
							</div>

							<div class="row">
								<div class="col-md-3">
									
									<!-- pvp_proyectado -->
									<div class="form-group">
										<label for="" class="label-control">PVP Proyectado</label>
										<input type="text" name="pvp_proyectado" id="pvp_proyectado" value="" class="form-control" placeholder="Ingrese pvp proyectado" required="">
									</div>
									
								</div>
								<div class="col-md-3">

									<!-- estimacion_m3 -->
									<div class="form-group">
										<label for="" class="label-control">Estimación M3</label>
										<input type="text" name="estimacion_m3" id="estimacion_m3" value="" class="form-control" placeholder="Ingrese estimacion m3" required="">
									</div>
								</div>
								<div class="col-md-3">
									
									<!-- plazo_pago_proveedor -->
									<div class="form-group">
										<label for="" class="label-control">Plazo Pago Proveedor</label>
										<input type="text" name="plazo_pago_proveedor" id="plazo_pago_proveedor" value="" class="form-control" placeholder="Ingrese plazo de pago" required="">
									</div>
									
								</div>
								<div class="col-md-3">
									
									<!-- escala_descuento_ipad -->
									<div class="form-group">
										<label for="" class="label-control">Escala Descuento Ipad</label>
										<input type="text" name="escala_descuento_ipad" id="escala_descuento_ipad" value="" class="form-control" placeholder="Ingrese escala de descuento" required="">
									</div>
									
								</div>
							</div>

							<div class="row">
								<div class="col-md-4">

									<!-- negociacion_especial_merma -->
									<div class="form-group">
										<label for="" class="label-control">Negociación Especial Merma</label>
										<textarea  name="negociacion_especial_merma" id="negociacion_especial_merma" class="form-control" placeholder="Ingrese descripción de negociación" required=""></textarea>
									</div>
									
								</div>
								<div class="col-md-4">
									
									<!-- negociacion_devoluciones -->
									<div class="form-group">
										<label for="" class="label-control">Negociación Por Devolución</label>
										<textarea  name="negociacion_devoluciones" id="negociacion_devoluciones" class="form-control" placeholder="Ingrese descripción de negociación" required=""></textarea>
									</div>

								</div>
								<div class="col-md-4">
									
									<!-- aportes_especiales_proveedor -->
									<div class="form-group">
										<label for="" class="label-control">Aportes Especiales Proveedor</label>
										<textarea  name="aportes_especiales_proveedor" id="aportes_especiales_proveedor" class="form-control" placeholder="Ingrese aportes de proveedor" required=""></textarea>
									</div>

								</div>
							</div>
							
							<hr>
							
							<div class="text-center">

								<input type="hidden" name="id_ficha" value="<?= $ficha_proveedor->id ?>">
								<button type="submit" class="btn btn-success">Guardar</button>
								<a href="<?= base_url(); ?>ficha/ver_ficha_comprador" class="btn btn-default">Cancelar</a>
								
							</div>

						</form>

					</div>
				</div>

			</div>

        </div>
    </div>
</div>