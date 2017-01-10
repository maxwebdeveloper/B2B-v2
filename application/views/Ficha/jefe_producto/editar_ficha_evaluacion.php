<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Formulario Ficha de Evaluación</h1>

			<p>A continuación deberá completar el formulario en la sección "Datos Jefe Produco".</p>
			
			<hr>

			<div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#tab_proveedor" aria-controls="tab_proveedor" role="tab" data-toggle="tab">Datos Proveedor</a>
					</li>
					<li role="presentation">
						<a href="#tab_comprador" aria-controls="tab_comprador" role="tab" data-toggle="tab">Datos Comprador</a>
					</li>
					<li role="presentation">
						<a href="#tab_jefe_producto" aria-controls="tab_jefe_producto" role="tab" data-toggle="tab">Datos Jefe Producto</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content" style="margin-top: 25px;">
					<div role="tabpanel" class="tab-pane active" id="tab_proveedor">
				
						<div class="row">
							<div class="col-md-6">
								
								<!-- Jefe Producto -->
				            	<div class="form-group">
				            		<label class="label-control">Jefe Producto</label>
				            		<input type="" name="" value="<?= $ficha_proveedor->jefe_producto; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-6">
								
								<!-- Comprador -->
				            	<div class="form-group">
				            		<label class="label-control">Comprador</label>
				            		<input type="" name="" value="<?= $ficha_proveedor->comprador; ?>" class="form-control" readonly="">
				            	</div>

							</div>
							<div class="col-md-4"></div>

						</div>

						<div class="row">
							<div class="col-md-6">
								
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
				        			<input type="number" min="1" name="precio_lista" id="precio_lista" class="form-control" maxlength="20" placeholder="Ingrese el precio del producto" readonly="" required="">
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
					<div role="tabpanel" class="tab-pane" id="tab_comprador">
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
	
								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Margen Esperado Espol</label>
									<input type="text" name="" id="" value="" class="form-control" placeholder="Ingrese ..." required="">
								</div>

							</div>
							<div class="col-md-3">

								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Margen Estimado Cliente</label>
									<input type="text" name="" id="" value="" class="form-control" placeholder="Ingrese ..." required="">
								</div>

							</div>
							
						</div>

						<div class="row">
							<div class="col-md-3">
								
								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">PVP Proyectado</label>
									<input type="text" name="" id="" value="" class="form-control" placeholder="Ingrese ..." required="">
								</div>
								
							</div>
							<div class="col-md-3">

								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Estimación M3</label>
									<input type="text" name="" id="" value="" class="form-control" placeholder="Ingrese ..." required="">
								</div>
							</div>
							<div class="col-md-3">
								
								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Plazo Pago Proveedor</label>
									<input type="text" name="" id="" value="" class="form-control" placeholder="Ingrese ..." required="">
								</div>
								
							</div>
							<div class="col-md-3">
								
								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Escala Descuento Ipad</label>
									<input type="text" name="" id="" value="" class="form-control" placeholder="Ingrese ..." required="">
								</div>
								
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">

								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Negociación Especial Merma</label>
									<textarea  name="" id="" class="form-control" placeholder="Ingrese ..." required=""></textarea>
								</div>
								
							</div>
							<div class="col-md-4">
								
								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Negociación Por Devolución</label>
									<textarea  name="" id="" class="form-control" placeholder="Ingrese ..." required=""></textarea>
								</div>

							</div>
							<div class="col-md-4">
								
								<!--  -->
								<div class="form-group">
									<label for="" class="label-control">Aportes Especiales Proveedor</label>
									<textarea  name="" id="" class="form-control" placeholder="Ingrese ..." required=""></textarea>
								</div>

							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="tab_jefe_producto">
						
						<form method="post" action="">

							
							
							<div class="row">
								<div class="col-md-4">
									
									<!-- Precio Competencia -->
									<div class="form-group">
										<label class="label-control">Precio Competencia (Referencial)</label>
										<input type="number" name="" id="" class="form-control" value="" placeholder="Ingrese precio competencia" required="">
									</div>

								</div>
								<div class="col-md-4">
									
									<!-- Rol en el Portafolio -->
									<div class="form-group">
										<label class="label-control">Rol en el Portafolio</label>
										<select name="" id="" class="form-control" required="" >
											<option value="">Innovación</option>
											<option value="">Margen</option>
											<option value="">Volumen</option>
											<option value="">Abre nota</option>
											<option value="">Reemplazo</option>
											<option value="">Nuevo segmento</option>
											<option value="">Expansión de Linea</option>
											<option value="">Desarrollo de Proveedor</option>
											<option value="">In & out - Estacional</option>
										</select>
									</div>
									
								</div>
								<div class="col-md-4">
									
									<!-- Volumen -->
									<div class="form-group">
										<label class="label-control">Volumen</label>
										<input type="text" name="" id="" class="form-control" value="" placeholder="Ingrese volumen" required="">
									</div>

								</div>
							</div>

							
							<div class="row">
								
							</div>
							<div class="row">
								<div class="col-md-4">
									
									<!--  -->
									<div class="form-group">
										<label for="" class="label-control">Expanción de Linea</label>
										<textarea name="" id="" class="form-control" placeholder="" required=""></textarea>
									</div>

								</div>
								<div class="col-md-4">
									
									<!--  -->
									<div class="form-group">
										<label for="" class="label-control">Desarrollo Proveedor</label>
										<textarea name="" id="" class="form-control" placeholder="" required=""></textarea>
									</div>

								</div>
								<div class="col-md-4">
									
									<!--  -->
									<div class="form-group">
										<label for="" class="label-control">Comentario</label>
										<textarea name="" id="" class="form-control" placeholder="" required=""></textarea>
									</div>

								</div>
							</div>
							
							<hr>
							
							<div class="text-center">
								<button type="submit" class="btn btn-success">Guardar</button>
								
							</div>

						</form>

					</div>
				</div>

			</div>

        </div>
    </div>
</div>