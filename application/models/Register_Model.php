<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Register_Model extends CI_Model{

		function Register_Model(){
	   		parent::__construct();
	    }

	    function valida(){
	    	$this->load->library('form_validation');
			$this->form_validation->set_rules('usr_fname', 'fname', 'required');
			$this->form_validation->set_rules('usr_fname', 'fname', 'min_lenght[3]');
			$this->form_validation->set_rules('usr_fname', 'fname', 'max_lenght[15]');
			$this->form_validation->set_rules('usr_fname', 'fname', 'alpha');

			$this->form_validation->set_rules('usr_lname', 'lname', 'required');
			$this->form_validation->set_rules('usr_lname', 'lname', 'min_lenght[3]');
			$this->form_validation->set_rules('usr_lname', 'lname', 'max_lenght[15]');
			$this->form_validation->set_rules('usr_lname', 'lname', 'alpha');
			

			$this->form_validation->set_rules('usr_email', 'email', 'required');
			$this->form_validation->set_rules('usr_email', 'email', 'max_lenght[30]');
			$this->form_validation->set_rules('usr_email', 'email', 'is_unique');

	    	if($this->form_validation->run()){
	    		$nome = $this->input->post('usr_fname');
	    		$sobrenome = $this->input->post('usr_lname');
	    		$email = $this->input->post('usr_email');
	    		$data = array('nome' => $nome, 'sobrenome' => $sobrenome, 'email' => $email);
	    		$this->load->model("dao/RegisterDAO");
	    		$this->RegisterDAO->create_table();
				return 	$this->RegisterDAO->insert($data);
	    	}else{
	    			    		echo "relex no durex";

	    		return false;
	    	}

	    }

	}
