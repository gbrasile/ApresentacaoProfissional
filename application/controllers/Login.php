<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Login extends MY_Controller {
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view('login');
	}
	
	public function logar(){
		$this->load->helper('form');
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');
		$this->load->database();

		$this->load->model("Login_Model");
		$dados = $this->Login_Model->getDados();
		
		if ($usuario == $dados['usuario'] && $senha ==  $dados['senha'] ) {
			$this->session->set_userdata("logado", 1);
			redirect(base_url().'admin');
		} else {
			//caso a senha/usuário estejam incorretos, então mando o usuário novamente para a tela de login
			$dados['erro'] = "Usuário/Senha incorretos";
			$this->load->view('common/header');
			$this->load->view('common/header2');
			$this->load->view("login", $dados);
			
		}
	}
	/*
	 * Aqui eu destruo a variável logado na sessão e redireciono para a url base. Como esta variável não existe mais, o usuário
	 * será direcionado novamente para a tela principal
	 */
	public function logout(){
		$this->session->unset_userdata("logado");
		redirect(base_url());
		
	}

}