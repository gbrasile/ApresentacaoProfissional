<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Formacao extends MY_Controller {
	public function index()
	{
		$this->load->database();
		$this->load->model("Formacao_Model");
		
		$data = $this->Formacao_Model->recupera();

		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view("formacao", $data);
	}
}