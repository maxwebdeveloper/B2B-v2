<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct(){

		parent::__construct();
		$this->load->database();

	}

	// obtiene todos los usuarios
	public function getUsers(){

		$this->db->select('p.id, p.nombre, p.direccion, p.fono, p.correo, p.estado, e.nombre as empresa, t.nombre as tipo');
		$this->db->from('tb_persona p');
		$this->db->join('tb_empresa e', 'e.id = p.tb_empresa_id');
		$this->db->join('tb_tipo_usuario t', 't.id = p.tb_tipo_usuario_id');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
        	return $query->result();
		}else{
			return false;
		}

	}

	public function addUser($value='')
	{
		
	}

}