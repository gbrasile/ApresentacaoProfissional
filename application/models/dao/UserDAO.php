<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class UserDao extends CI_Model{

    function UserDAO(){
    parent::__construct();
    }

    function create_table(){
    	$sql="
          CREATE TABLE IF NOT EXISTS user(
           `id` integer(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `nome` varchar(40) NOT NULL,
            `snome` varchar(40) NOT NULL,
            `idade` integer(4) NOT NULL
          )
    	";
    	$this->db->query($sql);
    }
  }
?>