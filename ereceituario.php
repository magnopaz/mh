<?php
    include 'banco.php';
	include "userdata2.php";
?>



<html>
	<head>
		<title><?php echo 'Indicação de ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	</head>
	<body>
			<form name="formreceita" method="post" action="g_receituario.php">
			<?php echo "Data"?><br /><br /> <textarea name="data" rows="1" cols="10"></textarea><br /><br />	
			<?php echo "Indicação"?><br /><br /> <textarea name="receituario" rows="5" cols="100"></textarea><br /><br />					
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
	
			<input type="submit" value="Gerar Indicação"/>
		</form>
		<br />
		<form name="voltar" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Voltar para as Informações do Cliente"/>
		</form>
		<br />
	</body>
	
	
</html>