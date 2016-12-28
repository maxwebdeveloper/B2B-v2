<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct(){

		parent::__construct();
		$this->load->database();

	}

	// obtiene todos los usuarios
	public function getUser($id = false){

		$this->db->select('p.id, p.nombre, p.direccion, p.fono, p.correo, p.estado, e.nombre as empresa, t.nombre as tipo');
		$this->db->from('tb_persona p');
		$this->db->join('tb_empresa e', 'e.id = p.tb_empresa_id');
		$this->db->join('tb_tipo_usuario t', 't.id = p.tb_tipo_usuario_id');

		if ($id != false) {

			$this->db->where('p.id', $id);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->row();
			}else{
				return false;
			}

		}else{

			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->result();
			}else{
				return false;
			}
			
		}

	}

	// inserta un nuevo usuario
	public function addUser($datos){

		$data = array(
				'nombre' 				=> $datos['nombre'], 
				'direccion'				=> $datos['direccion'], 
				'fono' 					=> $datos['telefono'], 
				'correo' 				=> $datos['email'], 
				'clave' 				=> $datos['password'],  
				'tb_empresa_id' 		=> $datos['empresa'], 
				'tb_tipo_usuario_id' 	=> $datos['tipo']
			);

		return $this->db->insert('tb_persona', $data);
		
	}

	// actualiza los datos del usuario
	public function updateUser($datos){

		$data = array(
		        'nombre' 				=> $datos['nombre'], 
				'direccion'				=> $datos['direccion'], 
				'fono' 					=> $datos['telefono'], 
				'correo' 				=> $datos['email'], 
				'clave' 				=> $datos['password'],  
				'tb_empresa_id' 		=> $datos['empresa'], 
				'tb_tipo_usuario_id' 	=> $datos['tipo'],
				'estado' 				=> $datos['estado']
		);

		if ($datos['password'] == '') {
			unset($data['clave']);
		}

		$this->db->where('id', $datos['id']);
		return $this->db->update('tb_persona', $data);
		
	}

	// elimina los datos de usuario
	public function deleteUser($id){

		return $this->db->delete('tb_persona', array('id' => $id));
		
	}

}