<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'Session_Controller.php';

class Admin extends Session_Controller {

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/header3');
		//$this->load->view('common/header2');
		$this->load->view('admin_v');
	}

	public function recuperaSobre()
	{
		$this->load->view('admin_sobre');
	}

	public function insereSobre()
	{
		$this->load->helper('form');


		$data = array(
		'conteudo' => $this->input->post('conteudo')
		);
		// print_r($data); exit();
		$this->load->database();
		$this->load->model("Admin_Model");
		
		$this->Admin_Model->sobreInsere($data);



		$this->load->view('common/header');
		$this->load->view('common/header3');
		//$this->load->view('common/header2');
		$this->load->view('admin_v');
	}

	public function recuperaTrabalho()
	{
		$this->load->view('admin_trabalho');
	}

	public function insereTrabalho()
	{
		$this->load->helper('form');


		$data = array(
		'conteudo' => $this->input->post('conteudo')
		);
		// print_r($data); exit();
		$this->load->database();
		$this->load->model("Admin_Model");
		
		$this->Admin_Model->trabalhoInsere($data);



		$this->load->view('common/header');
		$this->load->view('common/header3');
		//$this->load->view('common/header2');
		$this->load->view('admin_v');
	}

	public function recuperaformacao()
	{

		$this->load->view('admin_formacao');
	}

	public function insereFormacao()
	{
		$this->load->helper('form');


		$data = array(
		'conteudo' => $this->input->post('conteudo')
		);
		// print_r($data); exit();
		$this->load->database();
		$this->load->model("Admin_Model");
		
		$this->Admin_Model->formacaoInsere($data);



		$this->load->view('common/header');
		$this->load->view('common/header3');
		//$this->load->view('common/header2');
		$this->load->view('admin_v');
	}


}