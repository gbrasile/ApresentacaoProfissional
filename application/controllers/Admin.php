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
		$this->load->database();
		$this->load->model("Sobre_Model");
		$data = $this->Sobre_Model->recupera();

		$this->load->view('admin_sobre', $data);
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
		$this->load->database();
		$this->load->model("Trabalho_Model");
		$data = $this->Trabalho_Model->recupera();

		$this->load->view('admin_trabalho', $data);
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
		$this->load->database();
		$this->load->model("Formacao_Model");
		$data = $this->Formacao_Model->recupera();

		$this->load->view('admin_formacao', $data);
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