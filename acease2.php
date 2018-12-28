<?php

	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
include "banco.php";
include "userdata2.php";
include "perguntasCease.php";

	$pg1=mysqli_real_escape_string($conexao,$_POST['p1']);
	$pg2=mysqli_real_escape_string($conexao,$_POST['p2']);
	$pg3=mysqli_real_escape_string($conexao,$_POST['p3']);
	$pg4=mysqli_real_escape_string($conexao,$_POST['p4']);
	$pg5=mysqli_real_escape_string($conexao,$_POST['p5']);
	$pg6=mysqli_real_escape_string($conexao,$_POST['p6']);
	$pg7=mysqli_real_escape_string($conexao,$_POST['p7']);
	$pg8=mysqli_real_escape_string($conexao,$_POST['p8']);
	$pg9=mysqli_real_escape_string($conexao,$_POST['p9']);
	$pg10=mysqli_real_escape_string($conexao,$_POST['p10']);
	
	//gravando dados no banco, função criada dentro do arqui banco.php
	$up = "UPDATE cease SET pergunta1 = '$pg1', pergunta2 = '$pg2', pergunta3 = '$pg3', pergunta4 = '$pg4', pergunta5 = '$pg5', pergunta6 = '$pg6', pergunta7 = '$pg7', pergunta8 = '$pg8', pergunta9 = '$pg9', pergunta10 = '$pg10' WHERE usuario = '$usuario'";
	
	//testa a gravação de dados no banco
	mysqli_query($conexao, $up);
	$sqlBusca = "SELECT * FROM cease WHERE usuario = '$usuario'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	$qd = $sql->fetch_array();
	if($pg10 == $qd["pergunta10"]){
		echo "<center>Gravação da alteração da parte 1 do Cease realizada com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}
	
	$pg11=$qd["pergunta11"];
	$pg12=$qd["pergunta12"];
	$pg13=$qd["pergunta13"];
	$pg14=$qd["pergunta14"];
	$pg15=$qd["pergunta15"];
	$pg16=$qd["pergunta16"];
	$pg17=$qd["pergunta17"];
	$pg18=$qd["pergunta18"];
	$pg19=$qd["pergunta19"];
	$pg20=$qd["pergunta20"];	

?>

<html>
	<head>
		<title><?php echo 'Preenchimento de Cease Parte 2 de ' . $dados['nomeCrianca'] . '';?></title>
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
	
		<form name="formcease2" method="post" action="acease3.php">
			<?php echo "$pergunta11"?><br /><br /> <textarea name="p11" rows="5" cols="100"><?php echo "$pg11";?></textarea><br /><br />
			<?php echo "$pergunta12"?><br /><br /> <textarea name="p12" rows="5" cols="100"><?php echo "$pg12";?></textarea><br /><br />
			<?php echo "$pergunta13"?><br /><br /> <textarea name="p13" rows="5" cols="100"><?php echo "$pg13";?></textarea><br /><br />
			<?php echo "$pergunta14"?><br /><br /> <textarea name="p14" rows="5" cols="100"><?php echo "$pg14";?></textarea><br /><br />
			<?php echo "$pergunta15"?><br /><br /> <textarea name="p15" rows="5" cols="100"><?php echo "$pg15";?></textarea><br /><br />
			<?php echo "$pergunta16"?><br /><br /> <textarea name="p16" rows="5" cols="100"><?php echo "$pg16";?></textarea><br /><br />
			<?php echo "$pergunta17"?><br /><br /> <textarea name="p17" rows="5" cols="100"><?php echo "$pg17";?></textarea><br /><br />
			<?php echo "$pergunta18"?><br /><br /> <textarea name="p18" rows="5" cols="100"><?php echo "$pg18";?></textarea><br /><br />
			<?php echo "$pergunta19"?><br /><br /> <textarea name="p19" rows="5" cols="100"><?php echo "$pg19";?></textarea><br /><br />
			<?php echo "$pergunta20"?><br /><br /> <textarea name="p20" rows="5" cols="100"><?php echo "$pg20";?></textarea><br /><br />
			
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