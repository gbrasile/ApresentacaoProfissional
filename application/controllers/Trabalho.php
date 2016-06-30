<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Trabalho extends MY_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->model("Trabalho_Model");
		
		$data = $this->Trabalho_Model->recupera();

		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view("trabalho", $data);
	}
}