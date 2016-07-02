<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Contato extends MY_Controller {
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view('contato');
	}

	public function enviar(){
		$this->load->helper('form');
		$this->load->library('form_validation');
	    $this->form_validation->set_rules('nome', 'nome', 'required|alpha|min_length[3]|max_length[20]');
	    $this->form_validation->set_rules('email', 'email', 'required|alpha|min_length[3]|max_length[40]');
	    $this->form_validation->set_rules('mensagem', 'mensagem', 'required|min_length[3]|max_length[250]');
		$data = array(
		'nome' => $this->input->post('nome'),
		'email' => $this->input->post('email'),
		'mensagem' => $this->input->post('mensagem')
		);
		// print_r($data); exit();
		$this->load->database();
		$this->load->model("Contato_Model");
		
		$this->Contato_Model->inserir($data);
		$dados['mensagem'] = "Mensagem cadastrada!";
		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view('contato', $dados);

	}
}