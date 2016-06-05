<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/MyToast.php');
  class UserDAOTest extends MyToast{

  	function UserDAOTest(){
  		parent::__construct("UserDAO Test");
  		$this->drop('user');
  	}

  	function test_install(){
  		/*$this->_assert_equals("Nome", "Nome", "Erro de sensibilidade de caso");*/
  	}

  	function test_user_table_created_with_success(){
      $this->load->model('dao/UserDAO', 'dao');
      $this->dao->create_table();
      $k=$this->table_exists('user');
      $this->_assert_equals($k, 1, "A tabela user não foi criada corretamente");

  	}

  	function test_table_has_correct_columns(){
  		$k=$this->table_has_column('user', 'id');
  		$this->_assert_equals($k, 1, "A tabela user não tem coluna id");
  		$l=$this->table_has_column('user', 'nome');
  		$this->_assert_equals($k,1,"A tabela user não tem coluna nome");
  		$m=$this->table_has_column('user', 'snome');
  		$this->_assert_equals($k,1,"A tabela user não tem coluna sobrenome");
  		$n=$this->table_has_column('user', 'idade');
  		$this->_assert_equals($k,1,"A tabela user não tem coluna idade");
  	}
  	function test_table_has_correct_column_number(){
  		$k=$this->table_column_number('user');
  		$this->_assert_equals($k,4);
  	}
  }
?>
