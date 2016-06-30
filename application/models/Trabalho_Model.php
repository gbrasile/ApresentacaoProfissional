<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabalho_Model extends CI_Model{

		function Trabalho_Model(){
	   		parent::__construct();
	    }

	     function recupera(){
	     	$this->db->select('*');
     		$this->db->from('trabalho');
      		$this->db->where('id', '1');
		    return $this->db->get()->row_array();
		}

}