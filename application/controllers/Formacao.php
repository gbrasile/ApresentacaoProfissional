<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Formacao extends My_Controller {
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view('formacao');
	}
}