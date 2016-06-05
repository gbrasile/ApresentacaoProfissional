<?php
  defined ('BASEPATH')OR exit('No direct script access allowed');
  require_once(APPPATH . '/controllers/test/MyToast.php');

  class PontoTest extends MyToast{

  	function PontoTest(){
  		parent::__construct("Ponto2D");
  		$this->load->library("Ponto2D", null, 'point');
  	}

  	function test_atribuicao_correta_de_coordenadas(){
  		$this->point->set_x(3);
  		$k=$this->point->get_x();
  		$this->_assert_equals($k,3, "O valor esperado era três, mas foi recebido $k");
  		$this->point->set_y(5);
  		$l=$this->point->get_y();
  		$this->_assert_equals($l,5, "O valor esperado era cinco, mas foi recebido $k");
  	}

  	function test_coordenadas_passadas_por_construtor_corretamente(){
  		$args=array('x'=>8,'y'=>6);
  		$this->load->library('Ponto2D', $args, 'ponto');
  	    $k=$this->ponto->get_x();
  	    $this->_assert_equals($k,8, "O valor esperado era oito, mas foi recebido $k");
  	    $l=$this->ponto->get_y();
  	    $this->_assert_equals($l,6, "O valor esperado era oito, mas foi recebido $l");
  	}
  }

?>