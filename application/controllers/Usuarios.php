<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct(){

		parent::__construct();
        $this->load->model('main_model');
        $this->load->model('usuarios_model');
        $this->load->library('form_validation');
        $this->load->helper('Form');

	}

    // pagina de inicio(ver usuarios)
    public function index(){

        $data['title_page'] = 'Usuarios | Inicio';

        $data['usuarios'] = $this->usuarios_model->getUser();

		$this->load->view('Backoffice/header', $data);
		$this->load->view('Usuarios/inicio');
		$this->load->view('Backoffice/footer');

    }

    // pagina agregar usuario(nuevo usuario)
    public function nuevo(){

        $data['title_page'] = 'Usuarios | Nuevo';

        $data['empresas']       = $this->main_model->getEmpresa();
        $data['tipo_usuario']   = $this->main_model->getTipoUsuario();
        $data['regiones']   = $this->main_model->getRegion();

		$this->load->view('Backoffice/header', $data);
		$this->load->view('Usuarios/nuevo');
		$this->load->view('Backoffice/footer');

    }

    public function insertar(){

        // establecemos las reglas de validacion
        $this->form_validation->set_rules('nombre',     'Nombre',       'required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('direccion',  'Direccion',    'required|min_length[10]|max_length[45]');
        $this->form_validation->set_rules('telefono',   'Telefono',     'required|min_length[6]|max_length[10]');
        $this->form_validation->set_rules('email',      'E-mail',        'required|min_length[8]|max_length[250]|valid_email|is_unique[tb_persona.correo]');
        $this->form_validation->set_rules('password',   'Password',     'required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('empresa',    'Empresa',      'required');
        $this->form_validation->set_rules('tipo',       'Tipo',         'required');

        // seteamos los mensajes de error
        $this->form_validation->set_message('required', 'El campo %s es requerido');
        $this->form_validation->set_message('min_length', 'El campo %s no puede tener menos de %s caracteres.');
        $this->form_validation->set_message('max_length', 'El campo %s no puede tener más de %s caracteres.');
        $this->form_validation->set_message('valid_email', 'El %s ingresado no es valido');
        $this->form_validation->set_message('is_unique', 'El %s ingresado ya se encuentra registrado.');

        // ejecutamos el form validation_errors()
        if ($this->form_validation->run() == false) {

            // si hay errores se envian a la vista
            $this->nuevo();

        } else {

            // si pasan la validacion son capturados
            $datos = array(
                'nombre'    => $this->input->post('nombre'),
                'direccion' => $this->input->post('direccion'),
                'telefono'  => $this->input->post('telefono'),
                'email'     => $this->input->post('email'),
                'password'  => $this->input->post('password'),
                'empresa'   => $this->input->post('empresa'),
                'tipo'      => $this->input->post('tipo'),
            );

            // insertamos los datos en la db
            $result = $this->usuarios_model->addUser($datos);

            // enviamos un mensaje de acuerdo al resultado
            if ($result == 1) {

                $clase      = 'alert-success';
                $mensaje    = 'Usuario agregado correctamente.';
            
            }else{
            
                $clase      = 'alert-danger';
                $mensaje    = 'Error al intentar registrar.';
            
            }

            $this->session->set_flashdata('result_usuario', '<div class="alert '.$clase.' alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>'.$mensaje.'</strong>
                </div>');

            // redireccionamos a la pagina de inicio de usuarios
            redirect(base_url().'usuarios/', 'refresh');
        }

    }
    
    public function editar(){

        if ($this->uri->segment(3) === null){

            redirect(base_url().'usuarios', 'location');

        }else{

            $user_id                = $this->uri->segment(3);

            $data['usuario']        = $this->usuarios_model->getUser($user_id);

            $data['empresas']       = $this->main_model->getEmpresa();
            $data['tipo_usuario']   = $this->main_model->getTipoUsuario();
            
            $data['title_page'] = 'Usuarios | Editar';

    		$this->load->view('Backoffice/header', $data);
    		$this->load->view('Usuarios/editar');
    		$this->load->view('Backoffice/footer');

        }

    }

    public function actualizar(){
        
        // establecemos las reglas de validacion
        $this->form_validation->set_rules('nombre',     'Nombre',       'required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('direccion',  'Direccion',    'required|min_length[10]|max_length[45]');
        $this->form_validation->set_rules('telefono',   'Telefono',     'required|min_length[6]|max_length[10]');
        $this->form_validation->set_rules('email',      'E-mail',       'required|min_length[8]|max_length[250]|valid_email');
        $this->form_validation->set_rules('password',   'Password',     'min_length[3]|max_length[45]');
        $this->form_validation->set_rules('empresa',    'Empresa',      'required');
        $this->form_validation->set_rules('tipo',       'Tipo',         'required');

        // seteamos los mensajes de error
        $this->form_validation->set_message('required',     'El campo %s es requerido');
        $this->form_validation->set_message('min_length',   'El campo %s no puede tener menos de %s caracteres.');
        $this->form_validation->set_message('max_length',   'El campo %s no puede tener más de %s caracteres.');
        $this->form_validation->set_message('valid_email',  'El %s ingresado no es valido');
        $this->form_validation->set_message('is_unique',    'El %s ingresado ya se encuentra registrado.');

        // ejecutamos el form validation
        if ($this->form_validation->run() == false) {

            // si hay errores se envian a la vista
            $errores = array(
                'err_nombre'    => str_replace('-', '', form_error('nombre', '-', '-')),
                'err_direccion' => str_replace('-', '', form_error('direccion', '-', '-')),
                'err_telefono'  => str_replace('-', '', form_error('telefono', '-', '-')),
                'err_email'     => str_replace('-', '', form_error('email', '-', '-')),
                'err_password'  => str_replace('-', '', form_error('password', '-', '-')),
                'err_empresa'   => str_replace('-', '', form_error('empresa', '-', '-')),
                'err_tipo'      => str_replace('-', '', form_error('tipo', '-', '-')),
            );

            $respuesta = array('correcto' => false, 'errores' => $errores);

            echo json_encode($respuesta);


        } else {

            // si pasan la validacion son capturados
            $datos = array(
                'id'        => $this->input->post('id'),
                'nombre'    => $this->input->post('nombre'),
                'direccion' => $this->input->post('direccion'),
                'telefono'  => $this->input->post('telefono'),
                'email'     => $this->input->post('email'),
                'password'  => $this->input->post('password'),
                'empresa'   => $this->input->post('empresa'),
                'tipo'      => $this->input->post('tipo'),
                'estado'    => $this->input->post('estado'),
            );

            // insertamos los datos en la db
            $result = $this->usuarios_model->updateUser($datos);

            // enviamos un mensaje de acuerdo al resultado
            if ($result == 1) {

                $clase      = 'alert-success';
                $mensaje    = 'Usuario actualizado correctamente.';
            
            }else{
            
                $clase      = 'alert-danger';
                $mensaje    = 'Error al intentar actualizar.';
            
            }

            $this->session->set_flashdata('result_usuario', '<div class="alert '.$clase.' alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>'.$mensaje.'</strong>
                </div>');

            $respuesta = array('correcto' => true);

            echo json_encode($respuesta);
        }
        
    }
    
    public function eliminar(){

        if ($this->uri->segment(3) === null){

            redirect(base_url().'usuarios', 'location');

        }else{

            $user_id    = $this->uri->segment(3);

            $result     = $this->usuarios_model->deleteUser($user_id);

            // enviamos un mensaje de acuerdo al resultado
            if ($result == 1) {

                $clase      = 'alert-success';
                $mensaje    = 'Usuario eliminado correctamente.';
            
            }else{
            
                $clase      = 'alert-danger';
                $mensaje    = 'Error al intentar eliminar.';
            
            }

            $this->session->set_flashdata('result_usuario', '<div class="alert '.$clase.' alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>'.$mensaje.'</strong>
                </div>');

            // redireccionamos a la pagina de inicio de usuarios
            redirect(base_url().'usuarios/', 'refresh');

        }

    }

}
