<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class UserDao extends CI_Model{

    function RegisterDAO(){
    parent::__construct();
    }

    function create_table(){
    	$sql="
          CREATE TABLE IF NOT EXISTS usuario(
           `id` integer(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` varchar(15) NOT NULL,
            `sobrenome` varchar(15) NOT NULL,
            `email` varchar(30) NOT NULL
          )
    	";
    	$this->db->query($sql);
    }

    function insert(array $data){
      echo "CHEGAMOS";
     /* $sql = '
      INSERT INTO usuario(nome, sobrenome, email)
      VALUES ('.$data[nome].', '.$data[sobrenome].', '.$data[email]).
      ')';
      echo $sql;
      if(1){
        echo "Sucesso!!!!";
        return 1;
      }else{
        echo "Fomos tombados";
        return 0;
      }
*/
    }
  }
  //$this->db->query($sql)
?>