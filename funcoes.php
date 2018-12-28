<?php

 function traduz_data($data){
 	if ($data == ""){
 		return "";
 	}
	
	$data1 = explode("/", $data);
	
	$data_mysql = "{$data1[2]}-{$data1[1]}-{$data1[0]}";
	
	return $data_mysql;
 }

?>