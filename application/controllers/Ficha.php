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
		$data['jefe_producto']	 = $this->usuarios_model->getUser_by_tipo(4);

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
		$this->fichas_model->id_jefe_producto 	= $this->input->post('jefe_producto');
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

            redirect(base_url().'usuarios', 'location');

        }else{

			$datos = $this->datos_usuario();

			$data['title_page'] = 'B2B | Crear Ficha '.$datos['title_page'];
			$data['datos'] = $datos;

			$this->fichas_model->id_ficha = $this->uri->segment(3);
			$data['ficha'] = $this->fichas_model->getFichaProveedor();


			$this->load->view('template/header', $data);
			$this->load->view('Ficha/proveedor/detalle_ficha_evaluacion');
			$this->load->view('template/footer');
        }

		
	}

	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// ::::::::::::::::::::::::::::::::::::: comprador :::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	public function crear_ficha_comprador(){
		
	}
	
	public function ver_ficha_comprador(){
		
	}

	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// ::::::::::::::::::::::::::::::::::: jefe producto :::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	public function crear_ficha_jp(){
		
	}

	public function ver_ficha_jp(){
		
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
