<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

    public function __construct(){

		parent::__construct();
        $this->load->model('main_model');

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

    public function mantenedor(){

        $data['title_page'] = 'B2B | Mantenedor';

        $data['empresas']       = $this->main_model->getEmpresa();

        $this->load->view('backoffice/header', $data);
        $this->load->view('backoffice/Mantenedor');
        $this->load->view('backoffice/footer');


    }
    
    public function editarEmpresa(){

        header('Content-Type: application/json');

        $datos = array(
            'id'        => $this->input->post('id'),
            'nombre'    => $this->input->post('nombre'),
            'estado'    => $this->input->post('estado'),
            'action'    => $this->input->post('action'),
        );

        if ($datos['action'] == 'editar') {
            
            $this->main_model->update   = "tb_empresa";
            $this->main_model->set      = "nombre = '".$datos['nombre']."', estado = '".$datos['estado']."'";
            $this->main_model->where    = "id = ".$datos['id'];
            $this->main_model->update();



        } else if($datos['action'] == 'eliminar'){
            
            $this->main_model->from     = "tb_empresa";
            $this->main_model->where    = "id = ".$datos['id'];
            $this->main_model->delete();


        }

        echo json_encode($datos);

    }
    
    public function nameFunction(){



    }

}
