<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ficha extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('main_model');
		$this->load->model('fichas_model');
		$this->load->model('usuarios_model');

		if(!$this->session->userdata('username')){
            redirect(base_url().'acceso/', 'location');      
        }

	}

	public function index(){

		$datos = $this->datos_usuario();

		$data['title_page'] = 'B2B | Ficha '.$datos['title_page'];
		$data['datos'] = $datos;

		$this->load->view('template/header', $data);
		$this->load->view('Ficha/home');
		$this->load->view('template/footer');


	}

	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// ::::::::::::::::::::::::::::::::::::: proveedor :::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	
	public function crear_ficha_proveedor(){

		$datos = $this->datos_usuario();

		$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
		$data['datos'] = $datos;

		$data['formato_consumo'] = $this->main_model->getFormatoConsumo();
		$data['comprador'] 		 = $this->usuarios_model->getUser_by_tipo(3);

		$this->load->view('template/header', $data);
		$this->load->view('Ficha/proveedor/crear_ficha_evaluacion');
		$this->load->view('template/footer');
		
	}

	public function insert_ficha_proveedor(){


		$this->fichas_model->ruta_img 			= $this->input->post('imagen');
		$this->fichas_model->nombre 			= $this->input->post('nombre');
		$this->fichas_model->marca 				= $this->input->post('marca');
		$this->fichas_model->cantidad 			= $this->input->post('cantidad');
		$this->fichas_model->contenido 			= $this->input->post('contenido');
		$this->fichas_model->formato_venta 		= $this->input->post('formato_venta');

		$this->fichas_model->num_descuento 		= $this->input->post('num_descuento');
		$this->fichas_model->desc_1 			= $this->input->post('desc_1');
		$this->fichas_model->desc_2 			= $this->input->post('desc_2');
		$this->fichas_model->desc_3 			= $this->input->post('desc_3');
		$this->fichas_model->desc_4 			= $this->input->post('desc_4');
		$this->fichas_model->desc_5 			= $this->input->post('desc_5');
		
		$this->fichas_model->num_variedad 		= $this->input->post('num_variedad');
		$this->fichas_model->var_1 				= $this->input->post('var_1');
		$this->fichas_model->var_2 				= $this->input->post('var_2');
		$this->fichas_model->var_3 				= $this->input->post('var_3');
		$this->fichas_model->var_4 				= $this->input->post('var_4');
		$this->fichas_model->var_5 				= $this->input->post('var_5');
		
		$this->fichas_model->atributo 			= $this->input->post('atributo');
		$this->fichas_model->beneficios 		= $this->input->post('beneficios');
		$this->fichas_model->ppd 				= $this->input->post('ppd');
		$this->fichas_model->precio_lista 		= $this->input->post('precio_lista');
		$this->fichas_model->tb_tipo_estado_id 	= 1;

		$this->fichas_model->id_proveedor 		= $this->session->userdata('id_usuario');
		// $this->fichas_model->id_jefe_producto 	= $this->input->post('jefe_producto');
		$this->fichas_model->id_comprador 		= $this->input->post('comprador');

		$result = $this->fichas_model->add();

		if($result == 1){
			echo "Ficha agregada correctamente";
		}else{
			echo "Error al intentar agregar";
		}
		
		
	}
	
	public function ver_ficha_proveedor(){
		
		$datos = $this->datos_usuario();

		$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
		$data['datos'] = $datos;
		$data['fichas'] = $this->fichas_model->get();


		$this->load->view('template/header', $data);
		$this->load->view('Ficha/proveedor/ver_ficha_evaluacion');
		$this->load->view('template/footer');

	}

	public function detalle_ficha_proveedor(){

		if ($this->uri->segment(3) === null){

            redirect(base_url().'ficha', 'location');

        }else{

			$datos = $this->datos_usuario();

			$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
			$data['datos'] = $datos;

			$this->fichas_model->id_ficha = $this->uri->segment(3);
			$data['ficha'] = $this->fichas_model->detalleFichaProveedor();


			$this->load->view('template/header', $data);
			$this->load->view('Ficha/proveedor/detalle_ficha_evaluacion');
			$this->load->view('template/footer');
        }

		
	}

	// actualiza el estado del proveedor a enviado
	public function updateEstadoProveedor(){

		$id_ficha = $this->input->post('ficha_id');
		
		$this->fichas_model->estado_proveedor = 1;
		$this->fichas_model->id_ficha = $id_ficha;

		if ($this->fichas_model->updateEstadoProveedor() == 1) {
			echo json_encode("Actualizado correctamente");
		} else {
			echo json_encode("error al intentar actualizar");
		}
		

	}

	public function eliminarFichaProveedor(){

		$id_ficha = $this->input->post('ficha_id');
		
		$this->fichas_model->id_ficha = $id_ficha;

		if ($this->fichas_model->eliminarFichaProveedor() == 1) {
			echo json_encode("Elimado correctamente");
		} else {
			echo json_encode("error al intentar eliminar");
		}

	}

	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// ::::::::::::::::::::::::::::::::::::: comprador :::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	
	public function crear_ficha_comprador(){
		
		if ($this->uri->segment(3) === null){

            redirect(base_url().'ficha', 'location');

        }else{

			$datos = $this->datos_usuario();

			$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
			$data['datos'] = $datos;

			$this->fichas_model->id_ficha = $this->uri->segment(3);
			$data['ficha_proveedor'] = $this->fichas_model->detalleFichaProveedor();
			$data['jefe_producto']	 = $this->usuarios_model->getUser_by_tipo(4);

			$this->load->view('template/header', $data);
			$this->load->view('Ficha/comprador/editar_ficha_evaluacion');
			$this->load->view('template/footer');

        }
		
	}
	
	public function ver_ficha_comprador(){
		
		$datos = $this->datos_usuario();

		$data['title_page'] = 'B2B Comprador | Ver Ficha '.$datos['title_page'];
		$data['datos'] 		= $datos;

		$this->fichas_model->id_comprador= $this->session->userdata('id_usuario');
		$data['fichas'] 	= $this->fichas_model->getListCM();


		$this->load->view('template/header', $data);
		$this->load->view('Ficha/comprador/ver_ficha_evaluacion');
		$this->load->view('template/footer');

	}

	public function detalle_ficha_comprador(){

		if ($this->uri->segment(3) === null){

            redirect(base_url().'ficha', 'location');

        }else{

			$datos = $this->datos_usuario();

			$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
			$data['datos'] = $datos;

			$this->fichas_model->id_ficha = $this->uri->segment(3);
			$data['ficha'] = $this->fichas_model->detalleFichaComprador();


			$this->load->view('template/header', $data);
			$this->load->view('Ficha/comprador/detalle_ficha_evaluacion');
			$this->load->view('template/footer');
        }

		
	}

	public function update_ficha_comprador(){

		$this->fichas_model->id_jefe_producto 				= $this->input->post('jefe_producto');
		$this->fichas_model->estado_jefe_producto 			= 0;
		$this->fichas_model->margen_espol 					= $this->input->post('margen_espol');
		$this->fichas_model->margen_estimado_cliente 		= $this->input->post('margen_estimado_cliente');
		$this->fichas_model->pvp_proyectado 				= $this->input->post('pvp_proyectado');
		$this->fichas_model->estimacion_m3 					= $this->input->post('estimacion_m3');
		$this->fichas_model->plazo_pago_proveedor 			= $this->input->post('plazo_pago_proveedor');
		$this->fichas_model->escala_descuento_ipad 			= $this->input->post('escala_descuento_ipad');
		$this->fichas_model->negociacion_especial_merma 	= $this->input->post('negociacion_especial_merma');
		$this->fichas_model->negociacion_devoluciones 		= $this->input->post('negociacion_devoluciones');
		$this->fichas_model->aportes_especiales_proveedor 	= $this->input->post('aportes_especiales_proveedor');
		$this->fichas_model->estado_comprador 				= 1;
		$this->fichas_model->id_ficha 						= $this->input->post('id_ficha');

		$result = $this->fichas_model->updateComprador();

		if($result == 1){
			echo "Ficha actualizada correctamente";
		}else{
			echo "Error al intentar actualizar";
		}
		
	}

	// actualiza el estado del comprador a enviado (2)
	public function updateEstadoComprador(){

		$id_ficha = $this->input->post('ficha_id');
		
		$this->fichas_model->estado_comprador = 2;
		$this->fichas_model->id_ficha = $id_ficha;

		if ($this->fichas_model->updateEstadoComprador() == 1) {
			echo json_encode("Actualizado correctamente");
		} else {
			echo json_encode("error al intentar actualizar");
		}
		

	}
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// ::::::::::::::::::::::::::::::::::: jefe producto :::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	
	public function crear_ficha_jp(){
		

		if ($this->uri->segment(3) === null){

            redirect(base_url().'ficha', 'location');

        }else{

			$datos = $this->datos_usuario();

			$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
			$data['datos'] = $datos;

			$this->fichas_model->id_ficha = $this->uri->segment(3);
			$data['ficha_proveedor'] = $this->fichas_model->detalleFichaProveedor();

			$this->load->view('template/header', $data);
			$this->load->view('Ficha/jefe_producto/editar_ficha_evaluacion');
			$this->load->view('template/footer');

        }

	}

	public function ver_ficha_jp(){
		
		$datos = $this->datos_usuario();

		$data['title_page'] = 'B2B Jefe Producto | Ver Ficha '.$datos['title_page'];
		$data['datos'] 		= $datos;

		$this->fichas_model->id_jefe_producto = $this->session->userdata('id_usuario');
		$data['fichas'] 	= $this->fichas_model->getListJP();


		$this->load->view('template/header', $data);
		$this->load->view('Ficha/jefe_producto/ver_ficha_evaluacion');
		$this->load->view('template/footer');

	}

	public function datos_usuario(){

		$tipo = $this->session->userdata('tipo');

	    switch ($tipo) {
	        case 2:
	                // gerencia de ventas
	                $title_page = 'Gerencia Ventas';
	                $ruta_crear = base_url().'ficha/crear_ficha_gv';
	                $ruta_ver   = base_url().'ficha/ver_ficha_gv';
	            break;
	        case 3: 
	                // comprador
	                $title_page = 'Comprador';
	                $ruta_crear = base_url().'ficha/crear_ficha_comprador';
	                $ruta_ver   = base_url().'ficha/ver_ficha_comprador';
	            break;
	        case 4:
	                // jefe producto
	                $title_page = 'Jefe Producto';
	                $ruta_crear = base_url().'ficha/crear_ficha_jp';
	                $ruta_ver   = base_url().'ficha/ver_ficha_jp';
	            break;
	        case 5:
	                // proveedor
	                $title_page = 'Proveedor';
	                $ruta_crear = base_url().'ficha/crear_ficha_proveedor';
	                $ruta_ver   = base_url().'ficha/ver_ficha_proveedor';
	            break;
	    }

	    $datos = array(
	    		'title_page' => $title_page,
	    		'ruta_crear' => $ruta_crear,
	    		'ruta_ver' 	 => $ruta_ver
	    );

	    return $datos;

	}


}
