<?php

  echo'library loading...ok!';
  class Ponto2D{
  	private $x;
  	private $y;

    function Ponto2D(array $args=null){
    	if($args==null)return;
    	$this->x=$args['x'];
    	$this->y=$args['y'];
    }

  	function set_x($num){
  		$this->x=$num;
  	} 

  	function get_x(){
  		return $this->x;
  	}

  	function set_y($num){
  		$this->y=$num;
  	}

  	function get_y(){
  		return $this->y;
  	}
  } 
?>