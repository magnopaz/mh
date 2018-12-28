<?php
		session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}

    include 'banco.php';
	include "userdata2.php";
	include "perguntasCease.php";


	
	
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
		<p><?php echo ''. $pergunta1 . '<br />' . nl2br2($vcease['pergunta1']) . '<br />';?></p>
		<p><?php echo ''. $pergunta2 . '<br />' . nl2br2($vcease['pergunta2']) . '<br />';?></p>
		<p><?php echo ''. $pergunta3 . '<br />' . nl2br2($vcease['pergunta3']) . '<br />';?></p>
		<p><?php echo ''. $pergunta4 . '<br />' . nl2br2($vcease['pergunta4']) . '<br />';?></p>
		<p><?php echo ''. $pergunta5 . '<br />' . nl2br2($vcease['pergunta5']) . '<br />';?></p>
		<p><?php echo ''. $pergunta6 . '<br />' . nl2br2($vcease['pergunta6']) . '<br />';?></p>
		<p><?php echo ''. $pergunta7 . '<br />' . nl2br2($vcease['pergunta7']) . '<br />';?></p>
		<p><?php echo ''. $pergunta8 . '<br />' . nl2br2($vcease['pergunta8']) . '<br />';?></p>
		<p><?php echo ''. $pergunta9 . '<br />' . nl2br2($vcease['pergunta9']) . '<br />';?></p>
		<p><?php echo ''. $pergunta10 . '<br />' . nl2br2($vcease['pergunta10']) . '<br />';?></p>
		<p><?php echo ''. $pergunta11 . '<br />' . nl2br2($vcease['pergunta11']) . '<br />';?></p>
		<p><?php echo ''. $pergunta12 . '<br />' . nl2br2($vcease['pergunta12']) . '<br />';?></p>
		<p><?php echo ''. $pergunta13 . '<br />' . nl2br2($vcease['pergunta13']) . '<br />';?></p>
		<p><?php echo ''. $pergunta14 . '<br />' . nl2br2($vcease['pergunta14']) . '<br />>';?></p>
		<p><?php echo ''. $pergunta15 . '<br />' . nl2br2($vcease['pergunta15']) . '<br />';?></p>
		<p><?php echo ''. $pergunta16 . '<br />' . nl2br2($vcease['pergunta16']) . '<br />';?></p>
		<p><?php echo ''. $pergunta17 . '<br />' . nl2br2($vcease['pergunta17']) . '<br />';?></p>
		<p><?php echo ''. $pergunta18 . '<br />' . nl2br2($vcease['pergunta18']) . '<br />';?></p>
		<p><?php echo ''. $pergunta19 . '<br />' . nl2br2($vcease['pergunta19']) . '<br />';?></p>
		<p><?php echo ''. $pergunta20 . '<br />' . nl2br2($vcease['pergunta20']) . '<br />';?></p>
		<p><?php echo ''. $pergunta21 . '<br />' . nl2br2($vcease['pergunta21']) . '<br />';?></p>
		<p><?php echo ''. $pergunta22 . '<br />' . nl2br2($vcease['pergunta22']) . '<br />';?></p>
		<p><?php echo ''. $pergunta23 . '<br />' . nl2br2($vcease['pergunta23']) . '<br />';?></p>
		<p><?php echo ''. $pergunta24 . '<br />' . nl2br2($vcease['pergunta24']) . '<br />';?></p>
		<p><?php echo ''. $pergunta25 . '<br />' . nl2br2($vcease['pergunta25']) . '<br />';?></p>
		<p><?php echo ''. $pergunta26 . '<br />' . nl2br2($vcease['pergunta26']) . '<br />';?></p>
		<p><?php echo ''. $pergunta27 . '<br />' . nl2br2($vcease['pergunta27']) . '<br />';?></p>
		<p><?php echo ''. $pergunta28 . '<br />' . nl2br2($vcease['pergunta28']) . '<br />';?></p>
		<p><?php echo ''. $pergunta29 . '<br />' . nl2br2($vcease['pergunta29']) . '<br />';?></p>
		<p><?php echo ''. $pergunta30 . '<br />' . nl2br2($vcease['pergunta30']) . '<br />';?></p>
		<p><?php echo ''. $pergunta31 . '<br />' . nl2br2($vcease['pergunta31']) . '<br />';?></p>

		<br />
		<form name="voltar" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Voltar para as Informações do Cliente"/>
		</form>
		<br />
		<a href="logout.php">Sair</a>


	</body>
	
	
</html>