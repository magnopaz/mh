<?php
    include 'banco.php';
    $rn=$_POST['receituario'];

		session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
	
	
	$sql = "SELECT * FROM `receituario` WHERE `numero` = '$rn'";
	$queryr = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$rct = $queryr->fetch_array();
	$u=$rct['usuario'];
	
	
	$sqlu = "SELECT `nomeCrianca` FROM `clientes` WHERE `usuario` = '$u'";
	$queryu = $conexao->query($sqlu);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$un = $queryu->fetch_array();
	
?>

<html>
	<head>
		<title><?php echo 'Indicação número ' . $rct['numero'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<h1><p><?php echo 'Indicação número ' . $rct['numero'] . '';?></p></h1>
		<h2><p><?php echo 'Para ' . $un['nomeCrianca'] . '';?></p></h2>
		<h2><p><?php echo 'Data de Emissão: ' . traduz_data_para_exibir($rct['dataReceita']) . '';?></p></h2>
		<p><?php echo nl2br2($rct['receita']);?></p>


		<p></p>
		<a href="logout.php">Sair</a>


	</body>
	
	
</html>