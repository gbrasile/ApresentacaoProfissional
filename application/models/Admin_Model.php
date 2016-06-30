<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

		function Admin_Model(){
	   		parent::__construct();
	    }

	     function sobreInsere($data){
	     	$this->db->insert('sobre', $data);
	     	$this->db->where('id', '1');
	    }

	    function trabalhoInsere($data){
	    	$this->db->insert('trabalho', $data);
	    	$this->db->where('id', '1');
	    }


	    function formacaoInsere($data){
	    	$this->db->where('id', '1');
			$this->db->update('formacao', $data); 

	    }
}
