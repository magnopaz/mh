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
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo 'Preenchimento de Cease de ' . $nc . '';?></title>
		
	</head>

	<body>
			<form name="formcease" method="post" action="s_cliente.php">
			<?php echo "$pergunta1"?><br /><br /> <textarea name="p1" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta2"?><br /><br /> <textarea name="p2" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta3"?><br /><br /> <textarea name="p3" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta4"?><br /><br /> <textarea name="p4" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta5"?><br /><br /> <textarea name="p5" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta6"?><br /><br /> <textarea name="p6" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta7"?><br /><br /> <textarea name="p7" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta8"?><br /><br /> <textarea name="p8" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta9"?><br /><br /> <textarea name="p9" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta10"?><br /><br /> <textarea name="p10" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta11"?><br /><br /> <textarea name="p11" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta12"?><br /><br /> <textarea name="p12" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta13"?><br /><br /> <textarea name="p13" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta14"?><br /><br /> <textarea name="p14" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta15"?><br /><br /> <textarea name="p15" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta16"?><br /><br /> <textarea name="p16" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta17"?><br /><br /> <textarea name="p17" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta18"?><br /><br /> <textarea name="p18" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta19"?><br /><br /> <textarea name="p19" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta20"?><br /><br /> <textarea name="p20" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta21"?><br /><br /> <textarea name="p21" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta22"?><br /><br /> <textarea name="p22" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta23"?><br /><br /> <textarea name="p23" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta24"?><br /><br /> <textarea name="p24" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta25"?><br /><br /> <textarea name="p25" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta26"?><br /><br /> <textarea name="p26" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta27"?><br /><br /> <textarea name="p27" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta28"?><br /><br /> <textarea name="p28" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta29"?><br /><br /> <textarea name="p29" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta30"?><br /><br /> <textarea name="p30" rows="5" cols="100"></textarea><br /><br />
			<?php echo "$pergunta31"?><br /><br /> <textarea name="p31" rows="5" cols="100"></textarea><br /><br />
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="preencherCease"/>
			<input type="submit" value="Gravar"/>
		</form>
				<br />
		
		<form name="voltar" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="hidden" name="op" value=""/>
		<input type="submit" value="Voltar para as Informações do Cliente"/>
		</form>
		<br />
		<a href="logout.php">Sair</a>
	</body>

</html>
