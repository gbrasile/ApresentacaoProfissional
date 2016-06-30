<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model{

		function Login_Model(){
	   		parent::__construct();
	    }

	     function getDados(){
			$this->db->select('*');
     		$this->db->from('usuario');
      		$this->db->where('id', '1');
		    return $this->db->get()->row_array();
	    }
}
