<?php  

$rut = array(
	'type' 			=> 'text', 
	'id' 			=> 'rut', 
	'name' 			=> 'rut', 
	'class' 		=> 'form-control', 
	'placeholder' 	=> 'Ingrese su rut', 
	'minlength' 	=> '9', 
	'maxlength' 	=> '10', 
	'pattern' 		=> '\d{3,8}-[\d|kK]{1}', 
	'title' 		=> 'Debe ser un Rut válido',
	'autofocus'		=> '',
	'value'			=> set_value('rut')
	);

$password = array(
	'type' 			=> 'password', 
	'id' 			=> 'password', 
	'name' 			=> 'password', 
	'class' 		=> 'form-control', 
	'placeholder' 	=> 'Ingrese su password', 
	'minlength' 	=> '3', 
	'maxlength' 	=> '45'
	);

?>

<div class="container margin-top-100">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<h3 class="panel-title">Backoffice B2B</h3>
            	</div>
            	<div class="panel-body">
            		<img src="http://190.151.18.4/espol/remuneracion/img/logo.png" class="center-block" style="height: 65px; padding-bottom: 15px;">
            		<form action="<?= base_url(); ?>acceso/logIn" method="post" class="" autocomplete="off">
            			
            			<div class="container-fluid">
            				<div class="row">
		            			<div class="form-group <?php if (form_error('rut')){echo "has-error";} ?>">
		            				<div class="input-group">
		            					<span class="input-group-addon">
			            					<i class="fa fa-user" aria-hidden="true"></i>
		            					</span>
		            					<?= form_input($rut); ?>
		            				</div>
	            					<?= form_error('rut', '<span id="" class="help-block">', '</span>'); ?>
		            			</div>
            					
            				</div>
            				<div class="row">
		            			<div class="form-group <?php if (form_error('password')){echo "has-error";} ?>">
		            				<div class="input-group">
			            				<span class="input-group-addon">
			            					<i class="fa fa-key" aria-hidden="true"></i>
			            				</span>
		            					<?= form_input($password); ?>
		            				</div>
		            				<?= form_error('password', '<span id="" class="help-block">', '</span>'); ?>
		            			</div>
            					
            				</div>
            				<div class="row">
		            			<div class="form-group">
		            				<button id="btn_login" class="btn btn-success" ><i class="fa fa-sign-in" aria-hidden="true"></i> Acceder</button>
		            				<a href="">¿Olvidaste tu contraseña?</a>
		            			</div>
            					
            				</div>


            			</div>

            		</form>

            	</div>
            </div>
            
            
        </div>
    </div>
</div>