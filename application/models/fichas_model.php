<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fichas_model extends CI_Model {

	public $id_ficha;
	
	// ingresados por el proveedor
	
	public $ruta_img;
	public $nombre;
	public $contenido;
	public $atributo;
	public $precio_lista;
	public $marca;
	public $formato_venta;
	public $beneficios;

	public $num_descuento;
	public $num_variedad;

	public $cantidad;
	public $id_proveedor;
	public $id_jefe_producto;
	public $id_comprador;
	public $ppd;

	public $estado_proveedor;

	// descuentos
	public $desc_1;
	public $desc_2;
	public $desc_3;
	public $desc_4;
	public $desc_5;

	// variedades
	public $var_1;
	public $var_2;
	public $var_3;
	public $var_4;
	public $var_5;

	public $tb_tipo_estado_id;

	// ingresados por el comprador
	public $estado_comprador; 

	public $estado_jefe_producto;
	public $margen_espol;
	public $margen_estimado_cliente;
	public $pvp_proyectado;
	public $estimacion_m3;
	public $plazo_pago_proveedor;
	public $escala_descuento_ipad;
	public $negociacion_especial_merma;
	public $negociacion_devoluciones;
	public $aportes_especiales_proveedor;

	public function __construct(){

		parent::__construct();
		$this->load->database();

	}

	public function add(){
		
		$data = array(
				'ruta_img' 				=> $this->ruta_img, 
				'nombre_producto' 		=> $this->nombre, 
				'marca_producto' 		=> $this->marca, 
				'cantidad' 				=> $this->cantidad, 
				'contenido' 			=> $this->contenido, 
				'tb_formato_consumo_id' => $this->formato_venta, 
				'num_descuento' 		=> $this->num_descuento, 
				'descuento_1' 			=> $this->desc_1, 
				'descuento_2' 			=> $this->desc_2, 
				'descuento_3' 			=> $this->desc_3, 
				'descuento_4' 			=> $this->desc_4, 
				'descuento_5' 			=> $this->desc_5, 
				'num_variedades' 		=> $this->num_variedad, 
				'variedad_1' 			=> $this->var_1, 
				'variedad_2' 			=> $this->var_2, 
				'variedad_3' 			=> $this->var_3, 
				'variedad_4' 			=> $this->var_4, 
				'variedad_5' 			=> $this->var_5, 
				'atributos' 			=> $this->atributo, 
				'beneficios' 			=> $this->beneficios, 
				'ppd' 					=> $this->ppd, 
				'precio_lista' 			=> $this->precio_lista, 
				'tb_tipo_estado_id' 	=> $this->tb_tipo_estado_id,
				'id_proveedor' 			=> $this->id_proveedor,
				// 'id_jefe_producto' 		=> $this->id_jefe_producto,
				'id_comprador' 			=> $this->id_comprador

			);

		return $this->db->insert('mv_ficha_evaluacion', $data);

	}

	public function get($individual = false){
		
		$this->db->select('*');
		$this->db->from('mv_ficha_evaluacion');

		if ($individual != false) {

			$this->db->where('id', $this->id_ficha);
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


	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::: proveedor ::::::::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

	
	
	public function detalleFichaProveedor(){

		$this->db->select("f.id, f.ruta_img, f.nombre_producto, f.marca_producto, f.cantidad, f.contenido, f.num_descuento, f.descuento_1, f.descuento_1, f.descuento_2, f.descuento_3, f.descuento_4, f.descuento_5, f.num_variedades, f.variedad_1, f.variedad_2, f.variedad_3, f.variedad_4, f.variedad_5, f.atributos, f.beneficios, f.ppd, f.precio_lista, f.fecha_creacion, f.estado_proveedor, fc.nombre AS formato_consumo, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_proveedor) as proveedor, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_jefe_producto) as jefe_producto, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_comprador) as comprador");
		$this->db->from('mv_ficha_evaluacion f');
		$this->db->join('tb_formato_consumo fc', 'fc.id = f.tb_formato_consumo_id');

		$this->db->where('f.id', $this->id_ficha);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
        	return $query->row();
		}else{
			return false;
		}

	}

	public function updateEstadoProveedor(){

		$this->db->set('estado_proveedor', $this->estado_proveedor);
		$this->db->where('id', $this->id_ficha);
		return $this->db->update('mv_ficha_evaluacion');
		
	}

	public function eliminarFichaProveedor(){

		$this->db->where('id', $this->id_ficha);
		return $this->db->delete('mv_ficha_evaluacion');
		
	}

	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::: comprador ::::::::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	
	public function getListCM(){
		
		$this->db->select("f.*, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_proveedor) as proveedor");
		$this->db->from('mv_ficha_evaluacion f');
		$this->db->where('f.id_comprador', $this->id_comprador);
		$this->db->where('f.estado_proveedor', 1);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
        	return $query->result();
		}else{
			return false;
		}
			
	}	

	public function detalleFichaComprador(){

		$this->db->select("f.id, f.ruta_img, f.nombre_producto, f.marca_producto, f.cantidad, f.contenido, f.num_descuento, f.descuento_1, f.descuento_1, f.descuento_2, f.descuento_3, f.descuento_4, f.descuento_5, f.num_variedades, f.variedad_1, f.variedad_2, f.variedad_3, f.variedad_4, f.variedad_5, f.atributos, f.beneficios, f.ppd, f.precio_lista, f.fecha_creacion, f.estado_proveedor, fc.nombre AS formato_consumo, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_proveedor) as proveedor, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_jefe_producto) as jefe_producto, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_comprador) as comprador, f.margen_espol, f.margen_estimado_cliente, f.pvp_proyectado, f.estimacion_m3, f.plazo_pago_proveedor, f.escala_descuento_ipad, f.negociacion_especial_merma, f.negociacion_devoluciones, f.aportes_especiales_proveedor");
		$this->db->from('mv_ficha_evaluacion f');
		$this->db->join('tb_formato_consumo fc', 'fc.id = f.tb_formato_consumo_id');

		$this->db->where('f.id', $this->id_ficha);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
        	return $query->row();
		}else{
			return false;
		}
		


	}

	public function updateComprador(){

		$this->db->set('id_jefe_producto', 				$this->id_jefe_producto);
		$this->db->set('estado_jefe_producto', 			$this->estado_jefe_producto);
		$this->db->set('margen_espol', 					$this->margen_espol);
		$this->db->set('margen_estimado_cliente', 		$this->margen_estimado_cliente);
		$this->db->set('pvp_proyectado', 				$this->pvp_proyectado);
		$this->db->set('estimacion_m3', 				$this->estimacion_m3);
		$this->db->set('plazo_pago_proveedor', 			$this->plazo_pago_proveedor);
		$this->db->set('escala_descuento_ipad', 		$this->escala_descuento_ipad);
		$this->db->set('negociacion_especial_merma', 	$this->negociacion_especial_merma);
		$this->db->set('negociacion_devoluciones', 		$this->negociacion_devoluciones);
		$this->db->set('aportes_especiales_proveedor', 	$this->aportes_especiales_proveedor);
		$this->db->set('estado_comprador', 				$this->estado_comprador);

		$this->db->where('id', $this->id_ficha);
		return $this->db->update('mv_ficha_evaluacion');

		
	}

	public function updateEstadoComprador(){

		$this->db->set('estado_comprador', $this->estado_comprador);
		$this->db->where('id', $this->id_ficha);
		return $this->db->update('mv_ficha_evaluacion');
		
	}

	
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::: jefe producto ::::::::::::::::::::::::::::::::::::::::
	// :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
	
	public function getListJP(){
		
		$this->db->select("f.*, (select CONCAT(tb_persona.nombre, ' ', tb_persona.apellido) from tb_persona WHERE tb_persona.id = f.id_proveedor) as proveedor");
		$this->db->from('mv_ficha_evaluacion f');
		$this->db->where('f.id_jefe_producto', $this->id_jefe_producto);
		$this->db->where('f.estado_proveedor', 1);
		$this->db->where('f.estado_comprador', 2);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
        	return $query->result();
		}else{
			return false;
		}

	}


}



