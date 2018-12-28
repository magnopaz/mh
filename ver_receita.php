<?php
 
session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}	  


 include 'banco.php';
	include "userdata2.php";
	$rn=$_POST['receituario'];

	
	$sql = "SELECT * FROM `receituario` WHERE `numero` = '$rn'";
	$queryr = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$rct = $queryr->fetch_array();
	
?>

<html>
	<head>
		<title><?php echo 'Indicação número ' . $rct['numero'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<h1><p><?php echo 'Indicação número ' . $rct['numero'] . '';?></p></h1>
		<h2><p><?php echo 'Para ' . $dados['nomeCrianca'] . '';?></p></h2>
		<h2><p><?php echo 'Data de Emissão: ' . traduz_data_para_exibir($rct['dataReceita']) . '';?></p></h2>
		<p><?php echo nl2br2($rct['receita']);?></p>


		<p></p>
		<form name="voltar" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Voltar"/>
		</form>
		<p></p>
		<a href="logout.php">Sair</a>


	</body>
	
	
</html>