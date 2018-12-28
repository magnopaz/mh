<?php
	include "banco.php";
	include "userdata2.php";
	
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
	
	if ($_POST['op']=="alteraHistorico"){
		$historico=mysqli_real_escape_string($conexao,$_POST['historico']);
		$id=$_POST['id'];
		if (isset($_POST['dataHistorico'])) {
			$dataHistorico = traduz_data_para_banco($_POST['dataHistorico']);
		} else {
			$dataHistorico = '';
		}
		$up = "UPDATE historicos SET historico = '$historico', dataHistorico = '$dataHistorico' WHERE id = '$id'";
		mysqli_query($conexao, $up);
		$sqlBusca = "SELECT * FROM historicos WHERE id = '$id'";
		$sql = mysqli_query($conexao, $sqlBusca);
		$row = mysqli_num_rows($sql);
		$qd = $sql->fetch_array();
		echo "<center>Alteração do histórico selecionado realizada com sucesso!</center>";
		$_POST['op']="ok";
	}
	
	
?>



<html>
	<head>
		<title><?php echo 'Históricos do Cliente ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	!--fonts-->
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
		<h1><?php echo 'Históricos do Cliente ' . $dados['nomeCrianca'] . '';?></h1>

		
<?php
		$sql = "SELECT * FROM `historicos` WHERE usuario = '$usuario'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo "Não há Históricos registrados para este cliente.";	
		}
		else{
		echo 'Ele tem ' . $query->num_rows . ' históricos registrados<br />';
			while ($hs = $query->fetch_array()){
				echo '<form name="alterarhistoricos" method="post" action="ahistorico.php"><input type="hidden" name="usuario" value="' . $usuario . '"/><input type="hidden" name="id" value="' . $hs[id] . '"/><input type="hidden" name="op" value="alteraHistorico"/>';
				echo 'Data: <textarea name="dataHistorico" rows="1" cols="10">' . traduz_data_para_exibir($hs[dataHistorico]) . '</textarea><br /><textarea name="historico" rows="3" cols="70">' . $hs[historico] . '</textarea><br />';
				echo '<input type="submit" value="Alterar este Histórico"/></form><br />';
			}
		}	
?>
			
			
		<p></p>
		
		<form name="scliente" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?>"/>
		<input type="submit" value="Voltar para as informações do Cliente"/>
		</form>
		<p></p>
			
		<a href="mariahelena.php">Voltar para a sua página inicial</a>
		<p></p>
		
		<a href="logout.php">Sair</a>
		
		
	
</html>
		