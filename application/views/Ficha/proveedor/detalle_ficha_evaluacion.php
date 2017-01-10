<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Detalle Ficha de Evaluación</h1>

			
			<hr>

			<div class="row">
				<div class="col-md-3">
						
						<!-- Comprador -->
		            	<div class="form-group">
		            		<label class="label-control">Nombre Comprador</label>
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
			
        	<hr>

        	<div class="row">
        		<div class="col-md-3">

					<div class="form-group">
						<label for="">Subir Imagen</label>
						<input type="file" id="imagen" name="imagen">
						<p class="help-block">Formato de imagen png.</p>
					</div>
        			
        		</div>
        	</div>
        	
    		<hr>

			<div class="text-center">
				<a href="<?= base_url(); ?>ficha/ver_ficha_proveedor" class="btn btn-default ">Volver</a>
			</div>
            	
            
        </div>
    </div>
</div>