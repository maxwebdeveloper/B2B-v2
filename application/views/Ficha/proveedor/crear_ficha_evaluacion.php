<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-12">
               
            
            <h1>Formulario Ficha de Evaluación</h1>

			<p>A continuación deberá completar los datos del formulario para crear la ficha de evaluación de producto.</p>
			
			<hr>


            <form method="post" action="<?= base_url(); ?>ficha/insert_ficha_proveedor" class="">
				
				<div class="row">
					<div class="col-md-3">
						
						<!-- Comprador -->
		            	<div class="form-group">
		            		<label class="label-control">Comprador</label>
		            		<select name="comprador" id="comprador" class="form-control" required="">
		        				<?php foreach ($comprador as $c): ?>
		        					<option value="<?= $c->id; ?>"><?= $c->nombre_completo; ?></option>
		        				<?php endforeach ?>
							</select>
		            	</div>

					</div>
					<div class="col-md-3">
						
						<!-- Nombre Producto -->
		            	<div class="form-group">
		            		<label class="label-control">Nombre Producto</label>
		        			<input type="text" name="nombre" id="nombre" class="form-control" maxlength="85" placeholder="Ingrese nombre del producto" required="">
		            	</div>

					</div>
					<div class="col-md-3">
						
						<!-- Marca -->
		            	<div class="form-group">
		            		<label class="label-control">Marca Producto</label>
		        			<input type="text" name="marca" id="marca" class="form-control" maxlength="45" placeholder="Ingrese la marca del producto" required="">
		            	</div>

					</div>
					<div class="col-md-3">
						
						<!-- Formato de Venta -->
		            	<div class="form-group">
		            		<label class="label-control">Formato de Venta</label>
		        			<select name="formato_venta" id="formato_venta" class="form-control" required="">
		        				<?php foreach ($formato_consumo as $f): ?>
		        					<option value="<?= $f->id; ?>"><?= $f->nombre; ?></option>
		        				<?php endforeach ?>
							</select>
		            	</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						
		            	<!-- contenido -->
		            	<div class="form-group">
		            		<label class="label-control">Contenido</label>
		        			<input type="text" name="contenido" id="contenido" class="form-control" maxlength="45" placeholder="Ingrese el contenido" required="">
		            	</div>

					</div>
					<div class="col-md-3">
						
						<!-- cantidad -->
		            	<div class="form-group">
		            		<label class="label-control">Cantidad</label>
		        			<input type="number" min="0" name="cantidad" id="cantidad" class="form-control" maxlength="20" placeholder="Ingrese la cantidad" required="">
		            	</div>

					</div>
					<div class="col-md-3">
						
						<!-- precio_lista -->
		            	<div class="form-group">
		            		<label class="label-control">Precio Lista</label>
		        			<input type="number" min="1" name="precio_lista" id="precio_lista" class="form-control" maxlength="20" placeholder="Ingrese el precio del producto" required="">
		            	</div>

					</div>
					<div class="col-md-3">
						
						<!-- Precio venta -->
		            	<div class="form-group">
		            		<label class="label-control">Posicionamiento Precio Deseado</label>
		        			<input type="number" min="1" name="ppd" id="ppd" class="form-control" maxlength="20" placeholder="Ingrese el precio del producto" required="">
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
            							<select class="form-control" id="num_descuento" name="num_descuento">
            								<option value="1">1</option>
            								<option value="2">2</option>
            								<option value="3">3</option>
            								<option value="4">4</option>
            								<option value="5">5</option>
            							</select>
            						</td>
            						<td><input type="number" min="0" name="desc_1" id="desc_1" class="form-control" maxlength="5" placeholder="Descuento 1"></td>
            						<td><input type="number" min="0" name="desc_2" id="desc_2" class="form-control" maxlength="5" placeholder="Descuento 2"></td>
            						<td><input type="number" min="0" name="desc_3" id="desc_3" class="form-control" maxlength="5" placeholder="Descuento 3"></td>
            						<td><input type="number" min="0" name="desc_4" id="desc_4" class="form-control" maxlength="5" placeholder="Descuento 4"></td>
            						<td><input type="number" min="0" name="desc_5" id="desc_5" class="form-control" maxlength="5" placeholder="Descuento 5"></td>
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
            							<select class="form-control" id="num_variedad" name="num_variedad">
            								<option value="1">1</option>
            								<option value="2">2</option>
            								<option value="3">3</option>
            								<option value="4">4</option>
            								<option value="5">5</option>
            							</select>
            						</td>
            						<td><input type="text" name="var_1" id="var_1" class="form-control" maxlength="45" placeholder="Nombre Variedad 1"></td>
            						<td><input type="text" name="var_2" id="var_2" class="form-control" maxlength="45" placeholder="Nombre Variedad 2"></td>
            						<td><input type="text" name="var_3" id="var_3" class="form-control" maxlength="45" placeholder="Nombre Variedad 3"></td>
            						<td><input type="text" name="var_4" id="var_4" class="form-control" maxlength="45" placeholder="Nombre Variedad 4"></td>
            						<td><input type="text" name="var_5" id="var_5" class="form-control" maxlength="45" placeholder="Nombre Variedad 5"></td>
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
		        			<textarea rows="4" maxlength="250" name="atributo" id="atributo" class="form-control" maxlength="" placeholder="Ingrese los atributos del producto" required=""></textarea>
		            	</div>
            			
            		</div>
            		<div class="col-md-6">
            			
						<!-- Beneficios -->
		            	<div class="form-group">
		            		<label class="label-control">Beneficios</label>
		        			<textarea rows="4" maxlength="250" name="beneficios" id="beneficios" class="form-control" maxlength="" placeholder="Ingrese los beneficios del producto" required=""></textarea>
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
					<button class="btn btn-success ">Guardar Ficha de Evaluación</button>
				</div>
            	
            	
            </form>
            
        </div>
    </div>
</div>