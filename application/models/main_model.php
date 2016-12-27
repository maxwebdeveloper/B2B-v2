<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function __construct(){

		parent::__construct();
		$this->load->database();

	}

	// obtiene una o todas las filas de la tabla tb_empresa 
	public function getEmpresa($id = false){

		$this->db->select('*');
		$this->db->from('tb_empresa e');

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

	// obtiene una o todas las filas de la tabla tb_tipo_estado 
	public function getTipoEstado($id = false){

		$this->db->select('*');
		$this->db->from('tb_tipo_estado e');
		
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

	// obtiene una o todas las filas de la tabla tb_tipo_usuario 
	public function getTipoUsuario($id = false){

		$this->db->select('*');
		$this->db->from('tb_tipo_usuario e');
		
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

}