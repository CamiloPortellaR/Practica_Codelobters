<?php
 defined('BASEPATH') OR exit('No direct script accesss allowed');
 
 class cx_db extends CI_Model
 {
 	
 	public function insertar_persona()
 	{
		$sql="call insertar_tabla_codeigniter_1(?,?,?,?)";
		$resultado = $this->db->query($sql,array('a4sslq1s',234,'Mujer',2));
		if($resultado==0){
			 $error=$this->db->error();
			 echo $error['message'];
			 echo $error['code'];
		}else{
			return($resultado);
		}
			
	}
 	
 }
 
?>