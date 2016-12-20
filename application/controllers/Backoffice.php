<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

    public function __construct(){

		parent::__construct();

	}

    public function index(){

        $data['title_page'] = 'Backoffice | Home';

		$this->load->view('Backoffice/header', $data);
		$this->load->view('Backoffice/Home');
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
    
    public function nameFunction(){



    }

}
