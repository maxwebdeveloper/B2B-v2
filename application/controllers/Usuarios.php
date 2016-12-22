<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct(){

		parent::__construct();
        $this->load->model('usuarios_model');

	}

    public function index(){

        $data['title_page'] = 'Usuarios | Inicio';

        $data['usuarios'] = $this->usuarios_model->getUsers();

		$this->load->view('Backoffice/header', $data);
		$this->load->view('Usuarios/inicio');
		$this->load->view('Backoffice/footer');

    }

    public function nuevo(){

        $data['title_page'] = 'Usuarios | Nuevo';

		$this->load->view('Backoffice/header', $data);
		$this->load->view('Usuarios/nuevo');
		$this->load->view('Backoffice/footer');

    }
    
    public function editar(){

        $data['title_page'] = 'Usuarios | Editar';

		$this->load->view('Backoffice/header', $data);
		$this->load->view('Usuarios/editar');
		$this->load->view('Backoffice/footer');

    }
    
    public function eliminar(){



    }

}
