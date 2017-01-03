<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

    public function __construct(){

		parent::__construct();
        $this->load->helper('Form');
        $this->load->library('form_validation');
        $this->load->model('main_model');
        $this->load->model('usuarios_model');

	}

    public function index(){

        $data['title_page'] = 'Backoffice | Acceso';

        $this->load->view('Backoffice/header', $data);
        $this->load->view('Backoffice/login');
        $this->load->view('Backoffice/footer');
        echo $_SESSION['username'];
        echo $_SESSION['tipo'];

    }
    public function login(){

        // destruir un sesion de usuario
        // $this->session->sess_destroy();

        $this->form_validation->set_rules('rut', 'Rut', 'trim|required|min_length[9]|max_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[45]');

        // seteamos los mensajes de error
        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('min_length', 'El campo %s no puede tener menos de %s caracteres.');
        $this->form_validation->set_message('max_length', 'El campo %s no puede tener más de %s caracteres.');

        if ($this->form_validation->run() == FALSE) {
            
            $this->index();

        } else {

            $rut        = trim($this->input->post('rut'));
            $password   = trim($this->input->post('password'));

            $usuario = $this->usuarios_model->access($rut, $password, 1);

            // si el usuario no existe en la db nmostramos  un mensje
            // de lo contrario creamos una  variable de sesion y
            // redireccionamos a la pagina de inicio del backofice
            // ademas debemos preguntar que tipo de usuario es el que
            // ha iniciado sesion si no es un administrador no debe
            // poder ingresar al backoffice pero lo podemos
            // redireccionar a l pagina de b2b por defecto para crear
            // fichas
            // ademas si existe una sesion activa, se debera redirecionar por defecto a la pagina de home del backoffice
            
            if ($usuario != false) {

                echo "Usuario existe";

                // creamos la sesion de administrador
                $datos_sesion = array(
                    'username'  => $usuario->nombre.' '.$usuario->apellido,
                    'tipo' => $usuario->tb_tipo_usuario_id
                );

                $this->session->set_userdata($datos_sesion);

            } else {

                echo "Usuario no existe";
            
            }
            
        }

    }

    public function home(){

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

        $data['empresas']           = $this->main_model->getEmpresa();
        $data['tipo_usuario']       = $this->main_model->getTipoUsuario();
        $data['formato_consumo']    = $this->main_model->getFormatoConsumo();

        $this->load->view('backoffice/header', $data);
        $this->load->view('backoffice/Mantenedor');
        $this->load->view('backoffice/footer');

    }
    
    // via ajax
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
    
    // via ajax
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
   
    // sin ocupar 
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
    
    public function editarTipoUsuario(){

        header('Content-Type: application/json');

        $datos = array(
            'id'        => $this->input->post('id'),
            'nombre'    => $this->input->post('nombre'),
            'estado'    => $this->input->post('estado'),
            'action'    => $this->input->post('action'),
        );

        if ($datos['action'] == 'editar') {
            
            $this->main_model->update   = "tb_tipo_usuario";
            $this->main_model->set      = "nombre = '".$datos['nombre']."', estado = '".$datos['estado']."'";
            $this->main_model->where    = "id = ".$datos['id'];
            $this->main_model->update();



        } else if($datos['action'] == 'eliminar'){
            
            $this->main_model->from     = "tb_tipo_usuario";
            $this->main_model->where    = "id = ".$datos['id'];
            $this->main_model->delete();


        }

        echo json_encode($datos);

    }
    
    public function agregarTipoUsuario(){

        $tipo = $this->input->post('tipo_usuario');

        $this->main_model->into     = "tb_tipo_usuario";
        $this->main_model->insert   = "nombre";
        $this->main_model->values   = "'".$tipo."'";

        if ($this->main_model->add())  {

            $clase      = 'alert-success';
            $mensaje    = 'Tipo tipo usuario agregado correctamente.';
        
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
    
    public function nameFunction(){



    }

}
