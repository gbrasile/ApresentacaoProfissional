<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

		function Admin_Model(){
	   		parent::__construct();
	    }

	     function sobreInsere($data){
	     	$this->db->where('id', '1');
			$this->db->update('sobre', $data); 
	    }

	    function trabalhoInsere($data){
	    	$this->db->where('id', '1');
			$this->db->update('trabalho', $data); 
	    }


	    function formacaoInsere($data){
	    	$this->db->where('id', '1');
			$this->db->update('formacao', $data); 

	    }
}
