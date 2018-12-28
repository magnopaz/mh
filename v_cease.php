<?php

	
		session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}

    include 'banco.php';
	include "userdata2.php";
	include "perguntasCease.php";

	$us = $dados['usuario'];


	$pg21=mysqli_real_escape_string($conexao,$_POST['p21']);
	$pg22=mysqli_real_escape_string($conexao,$_POST['p22']);
	$pg23=mysqli_real_escape_string($conexao,$_POST['p23']);
	$pg24=mysqli_real_escape_string($conexao,$_POST['p24']);
	$pg25=mysqli_real_escape_string($conexao,$_POST['p25']);
	$pg26=mysqli_real_escape_string($conexao,$_POST['p26']);
	$pg27=mysqli_real_escape_string($conexao,$_POST['p27']);
	$pg28=mysqli_real_escape_string($conexao,$_POST['p28']);
	$pg29=mysqli_real_escape_string($conexao,$_POST['p29']);
	$pg30=mysqli_real_escape_string($conexao,$_POST['p30']);
	$pg31=mysqli_real_escape_string($conexao,$_POST['p31']);


	//gravando dados no banco, usando um UPDATE
	$up = "UPDATE cease SET pergunta21 = '$pg21', pergunta22 = '$pg22', pergunta23 = '$pg23', pergunta24 = '$pg24', pergunta25 = '$pg25', pergunta26 = '$pg26', pergunta27 = '$pg27', pergunta28 = '$pg28', pergunta29 = '$pg29', pergunta30 = '$pg30', pergunta31 = '$pg31' WHERE usuario = '$usuario'";

	
	mysqli_query($conexao, $up);
	//testa a gravação de dados no banco
	$sqlBusca = "SELECT * FROM cease WHERE usuario = '$usuario' AND pergunta30 = '$pg30'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "<center>Cease gravado com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}
	
	
	$sql = "SELECT * FROM `cease` WHERE `usuario` = '$usuario'";
	$query = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$vcease = $query->fetch_array();

	
?>

<html>
	<head>
		<title><?php echo 'Cease de ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<p><?php echo 'Nome do Cliente: ' . $dados['nomeCrianca'] . '';?></p>
		<p><?php echo 'Data de Nascimento: ' . traduz_data_para_exibir($dados['dataNascimento']) . '';?></p>
		<p><?php echo 'Nome do Responsável 1: ' . $dados['nomeResponsavel1'] . '';?></p>
		<p><?php echo 'CPF do Responsável 1: ' . $dados['cpfResponsavel1'] . '';?></p>
		<p><?php echo 'Ocupação do Responsável 1: ' . $dados['profissaoResponsavel1'] . '';?></p>
		<p><?php echo 'Telefone do Responsável 1: ' . $dados['telefoneResponsavel1'] . '';?></p>
		<p><?php echo 'Nome do Responsável 2: ' . $dados['nomeResponsavel2'] . '';?></p>
		<p><?php echo 'CPF do Responsável 2: ' . $dados['cpfResponsavel2'] . '';?></p>
		<p><?php echo 'Ocupação do Responsável 2: ' . $dados['profissaoResponsavel2'] . '';?></p>
		<p><?php echo 'Telefone do Responsável 2: ' . $dados['TelefoneResponsavel2'] . '';?></p>
		<p><?php echo 'Endereço: ' . $dados['endereco'] . '';?></p>
		<p></p>
		<p><?php echo ''. $pergunta1 . '<p></p>' . nl2br2($vcease['pergunta1']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta2 . '<p></p>' . nl2br2($vcease['pergunta2']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta3 . '<p></p>' . nl2br2($vcease['pergunta3']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta4 . '<p></p>' . nl2br2($vcease['pergunta4']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta5 . '<p></p>' . nl2br2($vcease['pergunta5']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta6 . '<p></p>' . nl2br2($vcease['pergunta6']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta7 . '<p></p>' . nl2br2($vcease['pergunta7']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta8 . '<p></p>' . nl2br2($vcease['pergunta8']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta9 . '<p></p>' . nl2br2($vcease['pergunta9']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta10 . '<p></p>' . nl2br2($vcease['pergunta10']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta11 . '<p></p>' . nl2br2($vcease['pergunta11']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta12 . '<p></p>' . nl2br2($vcease['pergunta12']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta13 . '<p></p>' . nl2br2($vcease['pergunta13']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta14 . '<p></p>' . nl2br2($vcease['pergunta14']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta15 . '<p></p>' . nl2br2($vcease['pergunta15']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta16 . '<p></p>' . nl2br2($vcease['pergunta16']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta17 . '<p></p>' . nl2br2($vcease['pergunta17']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta18 . '<p></p>' . nl2br2($vcease['pergunta18']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta19 . '<p></p>' . nl2br2($vcease['pergunta19']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta20 . '<p></p>' . nl2br2($vcease['pergunta20']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta21 . '<p></p>' . nl2br2($vcease['pergunta21']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta22 . '<p></p>' . nl2br2($vcease['pergunta22']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta23 . '<p></p>' . nl2br2($vcease['pergunta23']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta24 . '<p></p>' . nl2br2($vcease['pergunta24']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta25 . '<p></p>' . nl2br2($vcease['pergunta25']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta26 . '<p></p>' . nl2br2($vcease['pergunta26']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta27 . '<p></p>' . nl2br2($vcease['pergunta27']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta28 . '<p></p>' . nl2br2($vcease['pergunta28']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta29 . '<p></p>' . nl2br2($vcease['pergunta29']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta30 . '<p></p>' . nl2br2($vcease['pergunta30']) . '<p></p>';?></p>
		<p><?php echo ''. $pergunta31 . '<p></p>' . nl2br2($vcease['pergunta31']) . '<p></p>';?></p>

		<br />
		
		<form name="painel" method="post" action="painel.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="painel2"/>
			<input type="submit" value="Voltar ao painel do usuario"/>
			</form>
			<br />
		<a href="logout.php">Sair</a>


	</body>
	
	
</html>