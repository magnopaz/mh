<?php
	include "banco.php";
	
	$sql = "SELECT * FROM `clientes` WHERE nomeCrianca = 'cliente' LIMIT 1";
	$query = $conexao->query($sql);
	//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
	$dados = $query->fetch_array();
	
	
	
	$usuario=$dados['usuario'];
	$nomeCrianca=$dados['nomeCrianca'];
	$dataNascimento=$dados['dataNascimento'];
	$nomeResponsavel1=$dados['nomeResponsavel1'];
	$cpfResponsavel1=$dados['cpfResponsavel1'];
	$profissaoResponsavel1=$dados['profissaoResponsavel1'];
	$telefoneResponsavel1=$dados['telefoneResponsavel1'];
	$nomeResponsavel2=$dados['nomeResponsavel2'];
	$cpfResponsavel2=$dados['cpfResponsavel2'];
	$profissaoResponsavel2=$dados['profissaoResponsavel2'];
	$telefoneResponsavel2=$dados['telefoneResponsavel2'];
	$endereco=$dados['endereco'];
	$senha=$dados['senha'];

	
	
?>


<html>
	<head>
		<title>Criando usuário</title>
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
	<div class="header">
	<div class="header-left">
		<div class="logo2"> 
		<a href="index.html"><img src="images/logo2.png" alt=""/></a>
	</div>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images/menu.png" alt=""/></span>
			<nav class="cl-effect-11" id="cl-effect-11">
           			<ul class="nav1">	
					<li><a href="index.php"ÁREA DO CLIENTE</a></li>	
					</ul>
			</nav>
			</div>
	</body>
<form name="formusuario2" method="post" action="s_cliente.php">
			<?php echo "Número de usuário"?><br /><br /> <textarea name="usuario" rows="1" cols="50"><?php echo "$usuario";?></textarea><br /><br />
			<?php echo "Nome da Criança"?><br /><br /> <textarea name="nomeCrianca" rows="1" cols="50"><?php echo "$nomeCrianca";?></textarea><br /><br />
			<?php echo "Data de Nascimento"?><br /><br /> <textarea name="dataNascimento" rows="1" cols="50"><?php echo "$dataNascimento";?></textarea><br /><br />
			<?php echo "Nome do Responsável 1"?><br /><br /> <textarea name="nomeResponsavel1" rows="1" cols="50"><?php echo "$nomeResponsavel1";?></textarea><br /><br />
			<?php echo "CPF do Responsável 1"?><br /><br /> <textarea name="cpfResponsavel1" rows="1" cols="50"><?php echo "$cpfResponsavel1";?></textarea><br /><br />
			<?php echo "Profissão do Responsável 1"?><br /><br /> <textarea name="profissaoResponsavel1" rows="1" cols="50"><?php echo "$profissaoResponsavel1";?></textarea><br /><br />
			<?php echo "Telefone do Responsável 1"?><br /><br /> <textarea name="telefoneResponsavel1" rows="1" cols="50"><?php echo "$telefoneResponsavel1";?></textarea><br /><br />
			<?php echo "Email do Responsável 1"?><br /><br /> <textarea name="emailResponsavel1" rows="1" cols="50"><?php echo "$emailResponsavel1";?></textarea><br /><br />
			<?php echo "Nome do Responsável 2"?><br /><br /> <textarea name="nomeResponsavel2" rows="1" cols="50"><?php echo "$nomeResponsavel2";?></textarea><br /><br />
			<?php echo "CPF do Responsável 2"?><br /><br /> <textarea name="cpfResponsavel2" rows="1" cols="50"><?php echo "$cpfResponsavel2";?></textarea><br /><br />
			<?php echo "Profissão do Responsável 2"?><br /><br /> <textarea name="profissaoResponsavel2" rows="1" cols="50"><?php echo "$profissaoResponsavel2";?></textarea><br /><br />
			<?php echo "Telefone do Responsável 2"?><br /><br /> <textarea name="telefoneResponsavel2" rows="1" cols="50"><?php echo "$telefoneResponsavel2";?></textarea><br /><br />
			<?php echo "Email do Responsável 2"?><br /><br /> <textarea name="emailResponsavel2" rows="1" cols="50"><?php echo "$emailResponsavel2";?></textarea><br /><br />
			<?php echo "Endereço"?><br /><br /> <textarea name="endereco" rows="1" cols="50"><?php echo "$endereco";?></textarea><br /><br />
			<?php echo "Senha"?><br /><br /> <textarea name="senha" rows="1" cols="50"><?php echo "$senha";?></textarea><br /><br />
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
                        <input type="hidden" name="op" value="alterarUsuario"/>

			
			<input type="submit" value="Alterar"/>
			</form>
			
					
	
</html>