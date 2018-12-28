<?php


	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
include "banco.php";
	include "userdata2.php";
include "perguntasCease.php";
$nc = $dados["nomeCrianca"];
?>



<html>
	<head>
		<title><?php echo 'Alteração de Cease Parte 1 de ' . $nc . '';?></title>
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
	
		<?php

$c = "SELECT * FROM `cease` WHERE `usuario` = $usuario";
		$q = $conexao->query($c);
		$qd = $q->fetch_array();

		
$pg1=$qd["pergunta1"];
$pg2=$qd["pergunta2"];
$pg3=$qd["pergunta3"];
$pg4=$qd["pergunta4"];
$pg5=$qd["pergunta5"];
$pg6=$qd["pergunta6"];
$pg7=$qd["pergunta7"];
$pg8=$qd["pergunta8"];
$pg9=$qd["pergunta9"];
$pg10=$qd["pergunta10"];


?>

			<form name="formcease1" method="post" action="acease2.php">
			<?php echo "$pergunta1"?><br /><br /> <textarea name="p1" rows="5" cols="100"><?php echo "$pg1";?></textarea><br /><br />
			<?php echo "$pergunta2"?><br /><br /> <textarea name="p2" rows="5" cols="100"><?php echo "$pg2";?></textarea><br /><br />
			<?php echo "$pergunta3"?><br /><br /> <textarea name="p3" rows="5" cols="100"><?php echo "$pg3";?></textarea><br /><br />
			<?php echo "$pergunta4"?><br /><br /> <textarea name="p4" rows="5" cols="100"><?php echo "$pg4";?></textarea><br /><br />
			<?php echo "$pergunta5"?><br /><br /> <textarea name="p5" rows="5" cols="100"><?php echo "$pg5";?></textarea><br /><br />
			<?php echo "$pergunta6"?><br /><br /> <textarea name="p6" rows="5" cols="100"><?php echo "$pg6";?></textarea><br /><br />
			<?php echo "$pergunta7"?><br /><br /> <textarea name="p7" rows="5" cols="100"><?php echo "$pg7";?></textarea><br /><br />
			<?php echo "$pergunta8"?><br /><br /> <textarea name="p8" rows="5" cols="100"><?php echo "$pg8";?></textarea><br /><br />
			<?php echo "$pergunta9"?><br /><br /> <textarea name="p9" rows="5" cols="100"><?php echo "$pg9";?></textarea><br /><br />
			<?php echo "$pergunta10"?><br /><br /> <textarea name="p10" rows="5" cols="100"><?php echo "$pg10";?></textarea><br /><br />
			
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			
			<input type="submit" value="Próximo"/>
		</form>
				<br />
		
		<form name="painel" method="post" action="painel.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="painel2"/>
			<input type="submit" value="Voltar ao painel do usuario"/>
			</form>
			<br />
	

</html>