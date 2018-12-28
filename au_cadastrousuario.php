<?php

	
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}

	include "banco.php";
	include "userdata2.php";

	
	$exibir_tabela = true;
	$tem_erros = false;
	$erros_validacao = array();
	
	if ($_POST['op']=="alteraUsuario"){

	
		if (isset($_POST['nomeCrianca']) && strlen($_POST['nomeCrianca']) > 0) {
			$nomeCrianca=mysqli_real_escape_string($conexao, $_POST['nomeCrianca']);
		} else {
			$tem_erros = true;
			$erros_validacao['nomeCrianca'] = 'O nome do cliente é obrigatório!';
		}
		if (isset($_POST['dataNascimento'])&& strlen($_POST['dataNascimento']) > 0) {
			if (validar_data($_POST['dataNascimento'])) {
				$dataNascimento = traduz_data_para_banco($_POST['dataNascimento']);	
			} else {
				$tem_erros = true;
				$erros_validacao['dataNascimento'] = 'Esta não é uma data válida! Digite no formato "01/01/1900"';
			}
			
		} else {
			$tem_erros = true;
			$erros_validacao['dataNascimento'] = 'A data de nascimento é obrigatória!';
		}
		
		
		if (isset($_POST['nomeResponsavel1']) && strlen($_POST['nomeResponsavel1']) > 0) {
			$nomeResponsavel1=mysqli_real_escape_string($conexao, $_POST['nomeResponsavel1']);
		} else {
			$tem_erros = true;
			$erros_validacao['nomeResponsavel1'] = 'O nome do Responsável 1 é obrigatório!';
		}	
		

	        $cpfResponsavel1=mysqli_real_escape_string($conexao, $_POST['cpfResponsavel1']);
		
		$profissaoResponsavel1=mysqli_real_escape_string($conexao, $_POST['profissaoResponsavel1']);
		
		if (isset($_POST['telefoneResponsavel1']) && strlen($_POST['telefoneResponsavel1']) > 0) {
			$telefoneResponsavel1=mysqli_real_escape_string($conexao, $_POST['telefoneResponsavel1']);
		} else {
			$tem_erros = true;
			$erros_validacao['telefoneResponsavel1'] = 'O telefone do Responsável 1 é obrigatório!';
		}
		
		if (isset($_POST['emailResponsavel1']) && strlen($_POST['emailResponsavel1']) > 0) {
			$emailResponsavel1=mysqli_real_escape_string($conexao, $_POST['emailResponsavel1']);
		} else {
			$tem_erros = true;
			$erros_validacao['emailResponsavel1'] = 'O E-mail do Responsável 1 é obrigatório!';
		}
		
		$nomeResponsavel2=mysqli_real_escape_string($conexao, $_POST['nomeResponsavel2']);

	        $cpfResponsavel2=mysqli_real_escape_string($conexao, $_POST['cpfResponsavel2']);	
		
		$profissaoResponsavel2=mysqli_real_escape_string($conexao, $_POST['profissaoResponsavel2']);
		$telefoneResponsavel2=mysqli_real_escape_string($conexao,$_POST['telefoneResponsavel2']);
		$emailResponsavel2=mysqli_real_escape_string($conexao,$_POST['emailResponsavel2']);
		
		
		if (isset($_POST['endereco']) && strlen($_POST['endereco']) > 0) {
			$endereco=mysqli_real_escape_string($conexao, $_POST['endereco']);
		} else {
			$tem_erros = true;
			$erros_validacao['endereco'] = 'O endereço é obrigatório!';
		}
		
		$senha=$dados['senha'];
	
	
		//gravando dados no banco, função criada dentro do arqui banco.php
		if (!$tem_erros){
			$up = "UPDATE clientes SET nomeCrianca = '$nomeCrianca', dataNascimento = '$dataNascimento',
			nomeResponsavel1 = '$nomeResponsavel1', cpfResponsavel1 = '$cpfResponsavel1', profissaoResponsavel1 = '$profissaoResponsavel1',	telefoneResponsavel1 = '$telefoneResponsavel1', emailResponsavel1 = '$emailResponsavel1',
			nomeResponsavel2 = '$nomeResponsavel2', cpfResponsavel2 = '$cpfResponsavel2', profissaoResponsavel2 = '$profissaoResponsavel2', telefoneResponsavel2 = '$telefoneResponsavel2', emailResponsavel2 = '$emailResponsavel2',
			endereco = '$endereco' WHERE usuario = '$usuario'";
		
			//testa a gravação de dados no banco
			mysqli_query($conexao, $up);
			$sqlBusca = "SELECT * FROM clientes WHERE usuario = '$usuario'";
			$sql = mysqli_query($conexao, $sqlBusca);
			$row = mysqli_num_rows($sql);
			$qd = $sql->fetch_array();
			if($nomeCrianca == $qd["nomeCrianca"]){
				echo "<center>Gravação da alteração realizada com sucesso!</center>";
			}else{
				echo "<center>Falha na gravação.</center>";	
			}
		}		
		$_POST['op']="ok";	
			
			
			
		
	}else{
		$usuario=$dados['usuario'];
		$nomeCrianca=$dados['nomeCrianca'];
		$dataNascimento=$dados['dataNascimento'];
		$nomeResponsavel1=$dados['nomeResponsavel1'];
		$cpfResponsavel1=$dados['cpfResponsavel1'];
		$profissaoResponsavel1=$dados['profissaoResponsavel1'];
		$telefoneResponsavel1=$dados['telefoneResponsavel1'];
		$emailResponsavel1=$dados['emailResponsavel1'];
		$nomeResponsavel2=$dados['nomeResponsavel2'];
		$cpfResponsavel2=$dados['cpfResponsavel2'];
		$profissaoResponsavel2=$dados['profissaoResponsavel2'];
		$telefoneResponsavel2=$dados['telefoneResponsavel2'];
		$emailResponsavel2=$dados['emailResponsavel2'];
		$endereco=$dados['endereco'];
		$senha=$dados['senha'];		
		
	}


	
	
?>


<html>
	<head>
		<title>Alteração de usuário</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MARIA HELENA TURQUETTI - TERAPEUTA CEASE, Tratamento Homeopático para o Autismo, Android Compatible web template, 
Smartphone Compatible web template, Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- start-smoth-scrolling -->
</head>		
	<body>

	</body>

<form name="formusuario2" method="post" action="au_cadastrousuario.php">
			<?php echo "Número de usuário"?><br /><br /> <textarea name="usuario" rows="1" cols="50"><?php echo "$usuario";?></textarea><br /><br />
			
			<?php if ($tem_erros && isset($erros_validacao['nomeCrianca'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['nomeCrianca']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			<?php echo "Nome do Cliente* (Este campo é obrigatório)"?><br /><br /> <textarea name="nomeCrianca" rows="1" cols="50"><?php echo "$nomeCrianca";?></textarea><br /><br />
			<?php if ($tem_erros && isset($erros_validacao['dataNascimento'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['dataNascimento']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			<?php echo "Data de Nascimento* (Este campo é obrigatório, digite no fotmato 00/00/0000)"?><br /><br /> <textarea name="dataNascimento" rows="1" cols="10"><?php echo traduz_data_para_exibir("$dataNascimento");?></textarea><br /><br />
			
			<?php if ($tem_erros && isset($erros_validacao['nomeResponsavel1'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['nomeResponsavel1']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			<?php echo "Nome do Responsável 1* (Este campo é obrigatório)"?><br /><br /> <textarea name="nomeResponsavel1" rows="1" cols="50"><?php echo "$nomeResponsavel1";?></textarea><br /><br />
			<?php if ($tem_erros && isset($erros_validacao['cpfResponsavel1'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['cpfResponsavel1']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>			
			<?php echo "CPF do Responsável 1 (Apenas números)"?><br /><br /> <textarea name="cpfResponsavel1" rows="1" cols="50"><?php echo "$cpfResponsavel1";?></textarea><br /><br />
			<?php echo "Profissão do Responsável 1"?><br /><br /> <textarea name="profissaoResponsavel1" rows="1" cols="50"><?php echo "$profissaoResponsavel1";?></textarea><br /><br />
			
			<?php if ($tem_erros && isset($erros_validacao['telefoneResponsavel1'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['telefoneResponsavel1']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			<?php echo "Telefone do Responsável 1"?><br /><br /> <textarea name="telefoneResponsavel1" rows="1" cols="50"><?php echo "$telefoneResponsavel1";?></textarea><br /><br />
			
			<?php if ($tem_erros && isset($erros_validacao['emailResponsavel1'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['emailResponsavel1']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			<?php echo "E-mail do Responsável 1"?><br /><br /> <textarea name="emailResponsavel1" rows="1" cols="50"><?php echo "$emailResponsavel1";?></textarea><br /><br />
			<?php echo "Nome do Responsável 2"?><br /><br /> <textarea name="nomeResponsavel2" rows="1" cols="50"><?php echo "$nomeResponsavel2";?></textarea><br /><br />
			<?php if ($tem_erros && isset($erros_validacao['cpfResponsavel2'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['cpfResponsavel2']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			
			<?php echo "CPF do Responsável 2 (Apenas números)"?><br /><br /> <textarea name="cpfResponsavel2" rows="1" cols="50"><?php echo "$cpfResponsavel2";?></textarea><br /><br />
			<?php echo "Profissão do Responsável 2"?><br /><br /> <textarea name="profissaoResponsavel2" rows="1" cols="50"><?php echo "$profissaoResponsavel2";?></textarea><br /><br />
			<?php echo "Telefone do Responsável 2"?><br /><br /> <textarea name="telefoneResponsavel2" rows="1" cols="50"><?php echo "$telefoneResponsavel2";?></textarea><br /><br />
			<?php echo "E-mail do Responsável 2"?><br /><br /> <textarea name="emailResponsavel2" rows="1" cols="50"><?php echo "$emailResponsavel2";?></textarea><br /><br />
			
			<?php if ($tem_erros && isset($erros_validacao['endereco'])) : ?>
			<span class="erro" style="color:#FF0000">
			<?php echo $erros_validacao['endereco']; 
				  echo "<br>";
			?>
			</span>
			<?php endif; ?>
			
			
			
			<?php echo "Endereço"?><br /><br /> <textarea name="endereco" rows="1" cols="50"><?php echo "$endereco";?></textarea><br /><br />
			<?php echo "Senha"?><br /><br /> <textarea name="senha" rows="1" cols="50"><?php echo "$senha";?></textarea><br /><br />
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="alteraUsuario"/>

			
			<input type="submit" value="Enviar Alteração nas Informações"/>
			</form>
		<br />
		
		<form name="painel" method="post" action="painel.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="painel2"/>
			<input type="submit" value="Voltar ao painel do usuario"/>
			</form>
			<br />
			
					
	
</html>	