<?php
  defined ('BASEPATH')OR exit('No direct script access allowed');
  require_once(APPPATH . '/controllers/test/MyToast.php');

  class HelperTest extends MyToast{

    function HelperTest(){
    	parent::__construct('Helper');
    	$this->load->helper('escola');
    }

    function test_verifica_aprovacao_reprova_corretamente(){
    	$k=verifica_aprovacao(0);
    	$this->_assert_false_strict($k,"Com a nota $k o aluno deve ser preso");
    }

    function test_verifica_aprovacao_aprova_corretamente(){
    	$k=verifica_aprovacao(6);
    	$this->_assert_true_strict($k,"Com a nota $k o aluno deve ser aprovado");
    	$k=verifica_aprovacao(10);
    	$this->_assert_true_strict($k,"Com a nota $k o aluno deve ser aprovado com honra");
    }

    function test_verifica_aprovacao_rejeita_notas_invalidas(){
    	$k=verifica_aprovacao(-0.01);
    	$this->_assert_equals($k,null,"Não existe nota menor que zero");
    	$k=verifica_aprovacao(10.01);
    	$this->_assert_equals($k,null,"Não existe nota maior que dez");    	
    }

    function test_verifica_aprovacao_rejeita_dados_desconhecidos(){
    	$k=verifica_aprovacao(array('8'));
    	$this->_assert_equals($k,null,"Arrays devem ser rejeitados");
    	$k=verifica_aprovacao('');
    	$this->_assert_equals($k,null,"A função deve receber uma nota numérica de 0 a 10");
        $k=verifica_aprovacao('palavra');
    	$this->_assert_equals($k,null,"A função deve receber uma nota numérica de 0 a 10");
    }
  }
?>