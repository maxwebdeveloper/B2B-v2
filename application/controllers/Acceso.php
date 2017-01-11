<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller {

	public function __construct(){

		parent::__construct();
        $this->load->helper('Form');
        $this->load->library('form_validation');
        $this->load->model('main_model');
        $this->load->model('usuarios_model');

	}

	public function index(){

        $data['title_page'] = 'B2B | Acceso';

        $this->load->view('Backoffice/header', $data);
        $this->load->view('Backoffice/login');
        $this->load->view('Backoffice/footer');

    }

    public function logIn(){

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

            $usuario = $this->usuarios_model->access($rut, $password);

            if ($usuario != false) {

                // creamos la sesion de administrador
                $datos_sesion = array(
                    'id_usuario'    => $usuario->id,
                    'username'      => $usuario->nombre.' '.$usuario->apellido,
                    'tipo'          => $usuario->tb_tipo_usuario_id
                );

                $this->session->set_userdata($datos_sesion);
                
                switch ($usuario->tb_tipo_usuario_id) {
                    case 1: 
                            // administrador
                            redirect(base_url().'backoffice/', 'location');
                        break;
                    case 2:
                            // gerencia de ventas
                            redirect(base_url().'ficha/', 'location');
                        break;
                    case 3: 
                            // comprador
                            redirect(base_url().'ficha/', 'location');
                        break;
                    case 4:
                            // jefe producto
                            redirect(base_url().'ficha/', 'location');
                        break;
                    case 5:
                            // proveedor
                            redirect(base_url().'ficha/', 'location');
                        break;
                    case 6:
                            // proveedor
                            redirect(base_url().'ficha/', 'location');
                        break;
                    
                    default:
                            echo "No existe un patron definido para su perfil.";
                        break;
                }
                 
            } else {
                $this->index();
                echo "No existe";
            }
            

            // si el usuario no existe en la db nmostramos  un mensje
            // de lo contrario creamos una  variable de sesion y
            // redireccionamos a la pagina de inicio del backofice
            // ademas debemos preguntar que tipo de usuario es el que
            // ha iniciado sesion si no es un administrador no debe
            // poder ingresar al backoffice pero lo podemos
            // redireccionar a l pagina de b2b por defecto para crear
            // fichas
            // ademas si existe una sesion activa, se debera redirecionar por defecto a la pagina de home del backoffice
            
        }

    }

    public function logOut(){
    	
    	$this->session->sess_destroy();
    	session_destroy();
    	redirect(base_url().'acceso/', 'location');

    }

}