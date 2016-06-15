<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Welcome extends MY_Controller {

	public function index(){
		$this->load->view('common/header');

		$this->load->view('test/carro');

		$this->load->view('common/footer');
	}

	function placa($x){
		$this->load->view('common/header');

		$this->load->model('dao/UserDAO');
		$data['carro'] = $this->UserDAO->get_dados_carro($x);
		$data['proprietario'] = $this->UserDAO->get_dados_prop($x);
		$this->load->view('test/carro', $data);

		$this->load->view('common/footer');
	}
}
