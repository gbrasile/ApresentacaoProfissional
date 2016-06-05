<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class UserDao extends CI_Model{

    function UserDAO(){
    parent::__construct();
    }

    function get_dados_carro($x){
      $this->db->select('*');
      $this->db->from('carro');
      $this->db->where('placa', $x);
      return $this->db->get()->row_array();
    }

    function get_dados_prop($x){
      $this->db->select('*');
      $this->db->from('proprietario');
      $this->db->where('placa', $x);
      return $this->db->get()->row_array();
    }
  }
?>
