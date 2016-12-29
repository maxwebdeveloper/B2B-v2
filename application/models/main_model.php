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
		$this->db->from('tb_empresa');

		if ($id != false) {

			$this->db->where('id', $id);
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
		$this->db->from('tb_tipo_estado');
		
		if ($id != false) {

			$this->db->where('id', $id);
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
		$this->db->from('tb_tipo_usuario');
		
		if ($id != false) {

			$this->db->where('id', $id);
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
	
	// obtiene una o todas las filas de la tabla tb_region 
	public function getRegion($id = false){

		$this->db->select('*');
		$this->db->from('tb_region');
		
		if ($id != false) {

			$this->db->where('id', $id);
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

	// obtiene una o todas las filas de la tabla tb_provincia 
	public function getProvincia($id = false, $id_region = false){

		$this->db->select('*');
		$this->db->from('tb_provincia');
		
		if ($id != false) {

			$this->db->where('id', $id);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->row();
			}else{
				return false;
			}
			
		}else if ($id_region != false) {

			$this->db->where('tb_region_id', $id_region);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->result();
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

	// obtiene una o todas las filas de la tabla tb_comuna 
	public function getComuna($id = false, $id_provincia = false){

		$this->db->select('*');
		$this->db->from('tb_comuna');
		
		if ($id != false) {

			$this->db->where('id', $id);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->row();
			}else{
				return false;
			}
			
		}else if ($id_provincia != false) {

			$this->db->where('tb_provincia_id', $id_provincia);
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->result();
			}else{
				return false;
			}
			
		}else{
			$this->db->order_by('comuna', 'asc');
			$query = $this->db->get();

			if ($query->num_rows() > 0) {
	        	return $query->result();
			}else{
				return false;
			}
			
		}
		
	}	

}