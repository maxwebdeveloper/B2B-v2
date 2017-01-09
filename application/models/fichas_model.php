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
				'id_jefe_producto' 		=> $this->id_jefe_producto,
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

	public function getFichaProveedor(){

		$sql = "SELECT f.id, f.ruta_img, f.nombre_producto, f.marca_producto, f.cantidad, f.contenido, f.descuento_1, f.descuento_1, f.descuento_2, f.descuento_3, f.descuento_4, f.descuento_5, f.num_variedades, f.variedad_1, f.variedad_2, f.variedad_3, f.variedad_4, f.variedad_5, f.atributos, f.beneficios, f.ppd, f.precio_lista, f.fecha_creacion, f.estado_proveedor, fc.nombre AS formato_consumo, CONCAT(p.nombre, ' ', p.apellido) AS proveedor, CONCAT(p2.nombre, ' ', p2.apellido) AS jefe_producto, CONCAT(p3.nombre, ' ', p3.apellido) AS comprador FROM mv_ficha_evaluacion f INNER JOIN tb_formato_consumo fc ON fc.id = f.tb_formato_consumo_id INNER JOIN tb_persona p ON p.id = f.id_proveedor INNER JOIN tb_persona p2 on p2.id = f.id_jefe_producto INNER JOIN tb_persona p3 ON p3.id = f.id_comprador WHERE f.id = ".$this->id_ficha;
		
		return $this->db->query($sql);


		// $this->db->select("f.id, f.ruta_img, f.nombre_producto, f.marca_producto, f.cantidad, f.contenido,");
		// $this->db->select("f.descuento_1, f.descuento_1, f.descuento_2, f.descuento_3, f.descuento_4, f.descuento_5,");
		// $this->db->select("f.num_variedades, f.variedad_1, f.variedad_2, f.variedad_3, f.variedad_4, f.variedad_5,");
		// $this->db->select("f.atributos, f.beneficios, f.ppd, f.precio_lista, f.fecha_creacion, f.estado_proveedor,");
		// $this->db->select("fc.nombre AS formato_consumo");		
		// $this->db->select("CONCAT(p.nombre, 	' ', p.apellido) AS proveedor");		
		// $this->db->select("CONCAT(p2.nombre, 	' ', p2.apellido) AS jefe_producto");		
		// $this->db->select("CONCAT(p3.nombre, 	' ', p3.apellido) AS comprador");

		// $this->db->from('mv_ficha_evaluacion f');

		// $this->db->join('tb_formato_consumo fc', 		'fc.id = f.tb_formato_consumo_id');
		// $this->db->join('tb_persona p', 				'p.id = f.id_proveedor');
		// $this->db->join('tb_persona p2', 				'p2.id = f.id_jefe_producto');
		// $this->db->join('tb_persona p3', 				'p3.id = f.id_comprador');

		// $this->db->where('f.id', $this->id_ficha);
		// $query = $this->db->get();

		// if ($query->num_rows() > 0) {
  //       	return $query->row();
		// }else{
		// 	return false;
		// }

	}

}


