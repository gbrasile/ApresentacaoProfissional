<?php
defined ('BASEPATH')OR exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/MyToast.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelperTest
 *
 * @author Aluno
 */
class HelperTest extends MyToast{
    //put your code here
    function HelperTest(){
        parent::__construct('HelperTest');
        $this->load->helper('escola');
        
    }
    
    function test_verifica_aprovacao_reprova_corretamente(){
        $k = verifica_aprovacao(5.99);
        $this->_assert_false_strict($k, "Com a nota 5.99, o aluno deve ser reprovado");
        
        $k = verifica_aprovacao(0);
        $this->_assert_false_strict($k, "Com a nota 0, o aluno deve ser reprovado");        
    }
    
    function test_verifica_aprovacao_aprova_corretamente(){
        $k = verifica_aprovacao(6);
        $this->_assert_true_strict($k, "Com a nota 6, o aluno deve ser aprovado");
        
        $k = verifica_aprovacao(10);
        $this->_assert_true_strict($k, "Com a nota 10, o aluno deve ser aprovado");        
    }
    
    function test_verifica_aprovacao_rejeita_notas_invalidas(){
        $k = verifica_aprovacao(-0.01);
        $this->_assert_equals($k,null, "Com a nota 6, o aluno deve ser aprovado");
        
        $k = verifica_aprovacao(10.01);
        $this->_assert_equals($k, null, "Não existe nota maior que dez");
    }
    
     function test_verifica_aprovacao_rejeita_dados_desconhecidos(){
        $k = verifica_aprovacao(array('8'));
        $this->_assert_equals($k, null,"Arrays devem ser rejeitados");
        
        $k = verifica_aprovacao("PALAVRA");
        $this->_assert_equals($k, null,"A função deve receber uma nota numérica entre 0 a 10");
        
        $k = verifica_aprovacao("");
        $this->_assert_equals($k, null, "A função deve receber uma nota numérica entre 0 a 10");
    }
}
