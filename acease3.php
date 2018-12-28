<?php

	
		session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
	include "banco.php";
	include "perguntasCease.php";
	include "userdata2.php";
	$pg11=mysqli_real_escape_string($conexao,$_POST['p11']);
	$pg12=mysqli_real_escape_string($conexao,$_POST['p12']);
	$pg13=mysqli_real_escape_string($conexao,$_POST['p13']);
	$pg14=mysqli_real_escape_string($conexao,$_POST['p14']);
	$pg15=mysqli_real_escape_string($conexao,$_POST['p15']);
	$pg16=mysqli_real_escape_string($conexao,$_POST['p16']);
	$pg17=mysqli_real_escape_string($conexao,$_POST['p17']);
	$pg18=mysqli_real_escape_string($conexao,$_POST['p18']);
	$pg19=mysqli_real_escape_string($conexao,$_POST['p19']);
	$pg20=mysqli_real_escape_string($conexao,$_POST['p20']);

	
	//gravando dados no banco, usando um UPDATE
	$up = "UPDATE cease SET pergunta11 = '$pg11', pergunta12 = '$pg12', pergunta13 = '$pg13', pergunta14 = '$pg14', pergunta15 = '$pg15', pergunta16 = '$pg16', pergunta17 = '$pg17', pergunta18 = '$pg18', pergunta19 = '$pg19', pergunta20 = '$pg20' WHERE usuario = '$usuario'";
	

	//testa a gravação de dados no banco
	mysqli_query($conexao, $up);
	$sqlBusca = "SELECT * FROM cease WHERE usuario = '$usuario'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	$qd = $sql->fetch_array();
	if($pg20 == $qd["pergunta20"]){
		echo "<center>Gravação da alteração da parte 2 do Cease realizada com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}
	
	$pg21=$qd["pergunta21"];
	$pg22=$qd["pergunta22"];
	$pg23=$qd["pergunta23"];
	$pg24=$qd["pergunta24"];
	$pg25=$qd["pergunta25"];
	$pg26=$qd["pergunta26"];
	$pg27=$qd["pergunta27"];
	$pg28=$qd["pergunta28"];
	$pg29=$qd["pergunta29"];
	$pg30=$qd["pergunta30"];
	$pg31=$qd["pergunta31"];


?>

<html>
	<head>
		<title><?php echo 'Alteração de Cease Parte 3 de ' . $dados['nomeCrianca'] . '';?></title>
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
	
		<form name="formcease3" method="post" action="v_cease.php">
			<?php echo "$pergunta21"?><br /><br /> <textarea name="p21" rows="5" cols="100"><?php echo "$pg21";?></textarea><br /><br />
			<?php echo "$pergunta22"?><br /><br /> <textarea name="p22" rows="5" cols="100"><?php echo "$pg22";?></textarea><br /><br />
			<?php echo "$pergunta23"?><br /><br /> <textarea name="p23" rows="5" cols="100"><?php echo "$pg23";?></textarea><br /><br />
			<?php echo "$pergunta24"?><br /><br /> <textarea name="p24" rows="5" cols="100"><?php echo "$pg24";?></textarea><br /><br />
			<?php echo "$pergunta25"?><br /><br /> <textarea name="p25" rows="5" cols="100"><?php echo "$pg25";?></textarea><br /><br />
			<?php echo "$pergunta26"?><br /><br /> <textarea name="p26" rows="5" cols="100"><?php echo "$pg26";?></textarea><br /><br />
			<?php echo "$pergunta27"?><br /><br /> <textarea name="p27" rows="5" cols="100"><?php echo "$pg27";?></textarea><br /><br />
			<?php echo "$pergunta28"?><br /><br /> <textarea name="p28" rows="5" cols="100"><?php echo "$pg28";?></textarea><br /><br />
			<?php echo "$pergunta29"?><br /><br /> <textarea name="p29" rows="5" cols="100"><?php echo "$pg29";?></textarea><br /><br />
			<?php echo "$pergunta30"?><br /><br /> <textarea name="p30" rows="5" cols="100"><?php echo "$pg30";?></textarea><br /><br />
			<?php echo "$pergunta31"?><br /><br /> <textarea name="p31" rows="5" cols="100"><?php echo "$pg31";?></textarea><br /><br />
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			
			
			
			<input type="submit" value="Enviar e Visualizar"/>
		</form>
		<br />
		
		<form name="painel" method="post" action="painel.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="painel2"/>
			<input type="submit" value="Voltar ao painel do usuario"/>
			</form>
			<br />
	
</html>