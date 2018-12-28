<?php 
 
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}

	include "banco.php";
	include "userdata2.php";
	

	
	
	$historicogravar = array();
	$historicogravar['historico']=$_POST['historico'];
	if (isset($_POST['data'])) {
		$historicogravar['dataHistorico'] = traduz_data_para_banco($_POST['data']);
	} else {
		$historicogravar['dataHistorico'] = '';
	}
	$historicogravar['usuario']=$usuario;
	//esta variavel é só para facilitar o comando da pesquisa, poderia ser usada a outra variável identica.
	$historico=$_POST['historico'];
	//gravando dados no banco, função criada dentro do arqui banco.php
	grava_historico($conexao, $historicogravar);
	//testa a gravação de dados no banco
	$sqlBusca = "SELECT * FROM historicos WHERE historico = '$historico' AND usuario = '$usuario'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "<center>Histórico gravado com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}
	
	$sql = "SELECT * FROM `historicos` WHERE `historico` = '$historico'";
	$queryr = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$h = $queryr->fetch_array();
	
?>

<html>
	<head>
		<title><?php echo 'Histórico de ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	<body>

		<p></p><p></p>
		<h2><p><?php echo 'Data: ' . traduz_data_para_exibir($h['dataHistorico']) . '';?></p></h2>
		<p><?php echo nl2br2($h['historico']);?></p>


		<p></p>
		<form name="voltar" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Voltar"/>
		</form>
		<p></p>
		<a href="logout.php">Sair</a>		
		
	</body>
	
</html>
