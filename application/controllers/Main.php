<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('main_model');

	}

	public function index(){

		$data['title_page'] = 'B2B | Home';

		$this->load->view('template/header', $data);
		$this->load->view('Main/Home');
		$this->load->view('template/footer');


	}

	public function loadProvincia(){
		
		$id_region = $this->input->post('region_id');
		$provincias = $this->main_model->getProvincia(false, $id_region);

		echo json_encode($provincias);

	}

	public function loadComuna(){
		
		$id_comuna = $this->input->post('provincia_id');
		$comunas = $this->main_model->getComuna(false, $id_comuna);

		echo json_encode($comunas);

	}


}
