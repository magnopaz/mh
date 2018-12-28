<?php
	include "banco.php";

	$_SESSION['cliente']=$_POST['clientes'];
	$user=$_SESSION['cliente'];
	
	$sql = "SELECT * FROM `clientes` WHERE usuario = '$user'";
	$query = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$dados = $query->fetch_array();
	
	
	
	
	
	

?>