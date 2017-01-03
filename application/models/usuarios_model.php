<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct(){

		parent::__construct();
		$this->load->database();

	}

	public function access($rut, $password, $tipo){

		$this->db->select('p.nombre, p.apellido, p.tb_tipo_usuario_id');
		
		$this->db->from('tb_persona p');

		$this->db->where('p.rut', 					$rut);
		$this->db->where('p.clave', 				$password);
		$this->db->where('p.tb_tipo_usuario_id', 	$tipo);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
        	return $query->row();
		}else{
			return false;
		}

	}

	// obtiene todos los usuarios
	public function getUser($id = false){
  
		$this->db->select('p.id, p.rut, p.nombre, p.apellido, p.direccion, p.fono, p.correo, p.estado, e.nombre as empresa, t.nombre as tipo');
		$this->db->select('e.nombre AS empresa, t.nombre AS tipo');
		$this->db->select('c.comuna, c.id as id_comuna, pro.provincia, pro.id as id_provincia, r.region, r.id as id_region');

		$this->db->from('tb_persona p');

		$this->db->join('tb_empresa e', 		'e.id 	= p.tb_empresa_id');
		$this->db->join('tb_tipo_usuario t', 	't.id 	= p.tb_tipo_usuario_id');
		$this->db->join('tb_comuna c', 			'c.id 	= p.tb_comuna_id');
		$this->db->join('tb_provincia pro', 	'pro.id = c.tb_provincia_id');
		$this->db->join('tb_region r', 			'r.id 	= pro.tb_region_id');

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
				'rut' 					=> $datos['rut'], 
				'nombre' 				=> $datos['nombre'], 
				'apellido' 				=> $datos['apellido'], 
				'direccion'				=> $datos['direccion'], 
				'fono' 					=> $datos['telefono'], 
				'correo' 				=> $datos['email'], 
				'clave' 				=> $datos['password'],  
				'tb_empresa_id' 		=> $datos['empresa'], 
				'tb_tipo_usuario_id' 	=> $datos['tipo'],
				'tb_comuna_id' 			=> $datos['comuna'],
			);

		return $this->db->insert('tb_persona', $data);
		
	}

	// actualiza los datos del usuario
	public function updateUser($datos){

		$data = array(
		        'rut' 					=> $datos['rut'], 
		        'nombre' 				=> $datos['nombre'], 
		        'apellido' 				=> $datos['apellido'], 
				'direccion'				=> $datos['direccion'], 
				'fono' 					=> $datos['telefono'], 
				'correo' 				=> $datos['email'], 
				'clave' 				=> $datos['password'],  
				'tb_empresa_id' 		=> $datos['empresa'], 
				'tb_tipo_usuario_id' 	=> $datos['tipo'],
				'estado' 				=> $datos['estado'],
				'tb_comuna_id' 			=> $datos['comuna'],
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