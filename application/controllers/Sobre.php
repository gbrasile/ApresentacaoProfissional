<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Sobre extends MY_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->model("Sobre_Model");
		
		$data = $this->Sobre_Model->recupera();

		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view("sobre", $data);
	}

}