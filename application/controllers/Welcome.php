<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Welcome extends MY_Controller {

	public function index(){
		/*echo "Ol&aacute; Pessoal.<br> Sejam benvidos &agrave; discplina LPII";*/
		$this->load->view('common/header');

		/*$data['form_post_url']='welcome/create';
		$this->load->view('test/form', $data);*/
        $this->load->view('home');
		$this->load->view('common/footer');
		
	}
/*
	public function create(){
		$this->load->view('common/header');

        echo "criando um registro do banco de dados";

		$this->load->view('common/footer');
	}

	public function register(){
		$this->load->view('common/header');
		$this->load->view('users/register');
		$this->load->view('common/footer');
	}

	public function char_filter($input){
		echo "Entrada legal: $input";
	}

	public function crypt($data){
		echo "<h1>CRIPTOGRAFIAS</h1>";
		echo "MD5 ";
		var_dump(md5($data));
		echo "<hr>";
		echo "SHA1 ";
		var_dump(sha1($data)) ;
		echo "<hr>";
		echo "PASSWORD_BCRYPT ";
		var_dump(password_hash($data, PASSWORD_BCRYPT));
		echo "<hr>";
		//temperando a senha...
		$salt = 'vnjhwhr238784hf4';
		echo "PASSWORD_BCRYPT temperada ";
		var_dump(password_hash($data.$salt, PASSWORD_BCRYPT));
		echo "<hr>";
		$message = "Informação ultra-secreta";
		$this->load->library('encrypt');
		echo "Biblioteca encrypt ";
		var_dump($this->encrypt->encode($message, $salt));
		echo "<hr>";
		$s = 'hmLZ4wrA4MVUx5nLSALKXnfWxkDOsEfZ6s6iYNFIZLnYJgOReuekqklDx5jyAjzHpzcVFNzhw/pdMRzACn5m5Q==';
		var_dump($this->encrypt->decode($s, $salt));
	}

*/

}
