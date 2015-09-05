<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_model extends CI_Model
{

	function __construct(){
		parent::__construct();
	}

	function valida_usuario($nombre,$contraseña)
	{
		$this->db->where('nombre',$nombre);
		$this->db->where('password',$contraseña);
		$query = $this->db->get('usuario');

		return $query->result_array();
	}
}