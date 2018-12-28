<?php
	include "banco.php";

	
/*	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: site/login.php");
		exit;
	}else{
		echo "Você está logado!";
	}
*/	
?>

<html>
	<head>
		<title>Bem Vinda Maria Helena</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--css-->
<link href="bootstrap-4.2.1-dist/css/bootstrap.min.css" rel="stylesheet">
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
<script src="bootstrap-4.2.1-dist/js/bootstrap.js"></script>
<script src="js/modernizr.custom.97074.js"></script>

</head>		
	<body>
        <div></div>
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
					<li><a href="index.php">INICIO</a></li>	
					</ul>
			</nav>
			</div>
	</body>
		<?php
		$sql = "SELECT `nomeCrianca`, `usuario` FROM `clientes` ORDER BY `clientes`.`nomeCrianca` ASC";
		$query = $conexao->query($sql);
		echo 'Você tem ' . $query->num_rows . ' clientes registrados';
		?>
		<p></p>				
		<form name="selecionausuario" method="post" action="s_cliente.php">
			<?php echo '<TD>Clientes</TD><TD><SELECT name="usuario">'?>
			<?php 
				while ($nomesclientes = $query->fetch_array()) {
					echo '<OPTION VALUE=' . "$nomesclientes[usuario]" . '>' . "$nomesclientes[nomeCrianca]" . '</OPTION>';
				}
				echo '</SELECT></TD>
					<input type="submit" value="Selecionar"/>
				</form>';?>
		
		
		
		
		
		
		
		
		<form name="cadusuario" method="post" action="cadastrarusuario.php">
		<input type="submit" value="Cadastrar Usuário"/>
		</form>
		<p></p>
		

		
		<a href="logout.php">Sair</a>


	
	
	
</html>