<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{

		function Admin_Model(){
	   		parent::__construct();
	    }

	     function sobreInsere($data){
	     	$this->db->insert('sobre', $data);
	    }

	    function trabalhoInsere($data){
	    	$this->db->insert('trabalho', $data);
	    }


	    function formacaoInsere($data){
	    	$this->db->insert('formacao', $data);

	    }
}
