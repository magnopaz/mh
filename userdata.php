<?php
	//coloca na variável $usuario o valor o usuário da seção, pego durante o login 
	$usuario=($_SESSION["usuario"]);
	//faz a busca no banco da linha que corresponde ao usuário da seção
	$sql = "SELECT * FROM `clientes` WHERE usuario = '$usuario'";
	$query = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$dados = $query->fetch_array();

?>