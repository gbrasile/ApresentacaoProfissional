<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato_Model extends CI_Model{

		function Contato_Model(){
	   		parent::__construct();
	    }

	     function inserir($data){
	     	$this->db->insert('contato', $data);
}

}
