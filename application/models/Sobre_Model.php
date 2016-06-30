<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre_Model extends CI_Model{

		function Sobre_Model(){
	   		parent::__construct();
	    }

	     function recupera(){
	     	$this->db->select('*');
     		$this->db->from('sobre');
      		$this->db->where('id', '1');
		    return $this->db->get()->row_array();
		}

}