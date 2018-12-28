<?php
	include "banco.php";
	include "userdata2.php";
	include "perguntasCease.php";
	
	$nomeUsuario=$dados['nomeUsuario'];
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
	$nc=$dados['nomeUsuario'];

	
	
?>

<html>
	<head>
		<title><?php echo 'Alteração de Cease de ' . $nc . '';?></title>
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

	$sqlBuscaCease = "SELECT * FROM cease WHERE usuario = '$usuario'";
	$sqlCease = mysqli_query($conexao, $sqlBuscaCease);
	$cease = $sqlCease->fetch_array();

		
	$pg1=$cease["pergunta1"];
	$pg2=$cease["pergunta2"];
	$pg3=$cease["pergunta3"];
	$pg4=$cease["pergunta4"];
	$pg5=$cease["pergunta5"];
	$pg6=$cease["pergunta6"];
	$pg7=$cease["pergunta7"];
	$pg8=$cease["pergunta8"];
	$pg9=$cease["pergunta9"];
	$pg10=$cease["pergunta10"];
	$pg11=$cease["pergunta11"];
	$pg12=$cease["pergunta12"];
	$pg13=$cease["pergunta13"];
	$pg14=$cease["pergunta14"];
	$pg15=$cease["pergunta15"];
	$pg16=$cease["pergunta16"];
	$pg17=$cease["pergunta17"];
	$pg18=$cease["pergunta18"];
	$pg19=$cease["pergunta19"];
	$pg20=$cease["pergunta20"];
	$pg21=$cease["pergunta21"];
	$pg22=$cease["pergunta22"];
	$pg23=$cease["pergunta23"];
	$pg24=$cease["pergunta24"];
	$pg25=$cease["pergunta25"];
	$pg26=$cease["pergunta26"];
	$pg27=$cease["pergunta27"];
	$pg28=$cease["pergunta28"];
	$pg29=$cease["pergunta29"];
	$pg30=$cease["pergunta30"];
	$pg31=$cease["pergunta31"];


?>

			<form name="formAlterarCease" method="post" action="s_cliente.php">
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
			<input type="hidden" name="op" value="alterarCease"/>
			<input type="submit" value="Alterar"/>
		</form>
				<br />
		
		<form name="painel" method="post" action="s_cliente.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value=""/>
			<input type="submit" value="Voltar"/>
			</form>
			<br />
	

</html>