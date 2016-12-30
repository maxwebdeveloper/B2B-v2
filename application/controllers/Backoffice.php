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
    
    public function agregarEmpresa(){

        $empresa = $this->input->post('empresa');

        $this->main_model->into     = "tb_empresa";
        $this->main_model->insert   = "nombre";
        $this->main_model->values   = "'".$empresa."'";

        if ($this->main_model->add())  {

            $clase      = 'alert-success';
            $mensaje    = 'Empresa agregada correctamente.';
        
        }else{
        
            $clase      = 'alert-danger';
            $mensaje    = 'Error al intentar registrar.';

        }

        $this->session->set_flashdata('result_usuario', '<div class="alert '.$clase.' alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>'.$mensaje.'</strong>
            </div>');

        echo json_encode("listo");

    }
    
    public function loadEmpresas(){

        $empresas = $this->main_model->getEmpresa(false, true);

        $datos = array();

        for($i = 0; $i < count($empresas); $i++){

            $datos[$i]['id'] = $empresas[$i]['id'];
            $datos[$i]['nombre'] = $empresas[$i]['nombre'];

            if ($empresas[$i]['estado'] == "A") {
                $datos[$i]['estado'] = 'Activo';
            }else{
                $datos[$i]['estado'] = 'Inactivo';
            }
        }

        echo json_encode($datos);

    }
    
    public function nameFunction(){



    }

}
