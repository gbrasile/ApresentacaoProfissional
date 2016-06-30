<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Register extends My_Controller {

	function Register() {
		parent::__construct('Register');
	}

	public function exibe(){
		$this->load->view('common/header');
		$this->load->view('users/register');
		$this->load->view('common/footer');

	}

	public function index(){
		$this->load->model("register_model");

		$x = $this->register_model->valida();
		if($x){
			
		}
	}

}