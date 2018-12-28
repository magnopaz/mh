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
		<title><?php echo 'Preenchimento de Cease Parte 1 de ' . $nc . '';?></title>
		
	</head>

	<body>
			<form name="formcease1" method="post" action="pcease2.php">
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
			
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
	
			<input type="submit" value="Proximo"/>
		</form>
				<br />
		
		<form name="painel" method="post" action="painel.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="painel2"/>
			<input type="submit" value="Voltar ao painel do usuario"/>
			</form>
			<br />
	</body>

</html>
