<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	public function validar($datos){
		//validamos que el usuario y la clave enviada pertenezcan al usuario
		$this->db->where('usuario',$datos['usuario']);
		$this->db->where('clave',$datos['clave']);
		$exe = $this->db->get('usuario');

		if ($this->db->affected_rows() > 0) {
			return $exe->row();
		}else{
			return false;
		}

	}


}

?>