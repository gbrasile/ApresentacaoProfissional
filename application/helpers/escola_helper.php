<?php

    function verifica_aprovacao($nota){
    	/*if(!is_numeric($nota))return null;
    	if($nota>=0&&$nota<6)return false;
    	else if($nota>=6&&$nota<=10)return true;
    	else return null;*/
    	/*professor*/if(!is_numeric($nota))return null;
    	if($nota>10||$nota<0)return null;

    	if($nota<6)return false;
    	else if($nota>=6)return true;
    }

?>