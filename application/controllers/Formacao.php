<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'MY_Controller.php';

class Formacao extends MY_Controller {
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('common/header2');
		$this->load->view('formacao');
	}
}