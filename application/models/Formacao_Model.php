<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formacao_Model extends CI_Model{

		function Formacao_Model(){
	   		parent::__construct();
	    }

	     function recupera(){
	     	$this->db->select('*');
     		$this->db->from('formacao');
      		$this->db->where('id', '1');
		    return $this->db->get()->row_array();
		}

}