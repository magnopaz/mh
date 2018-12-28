<?php 
 
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
	include "banco.php";
	include "userdata2.php";
	

	
	
	$receituariogravar = array();
	$receituariogravar['receituario']=$_POST['receituario'];
	if (isset($_POST['data'])) {
		$receituariogravar['dataReceita'] = traduz_data_para_banco($_POST['data']);
	} else {
		$receituariogravar['dataReceita'] = '';
	}
	$receituariogravar['usuario']=$usuario;
	//esta variavel é só para facilitar o comando da pesquisa, poderia ser usada a outra variável identica.
	$receituario=$_POST['receituario'];
	//gravando dados no banco, função criada dentro do arqui banco.php
	grava_receituario($conexao, $receituariogravar);
	//testa a gravação de dados no banco
	$sqlBusca = "SELECT * FROM receituario WHERE receita = '$receituario' AND usuario = '$usuario'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "<center>Indicação gerada com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}
	
	$sql = "SELECT * FROM `receituario` WHERE `receita` = '$receituario'";
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

		<p></p><p></p>
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
