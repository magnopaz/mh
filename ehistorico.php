<?php
    include 'banco.php';
	include "userdata2.php";
?>



<html>
	<head>
		<title><?php echo 'Histórico de ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	</head>
	<body>
			<form name="formhistorico" method="post" action="g_historico.php">
			<?php echo "Data"?><br /><br /> <textarea name="data" rows="1" cols="10"></textarea><br /><br />	
			<?php echo "Descritivo"?><br /><br /> <textarea name="historico" rows="5" cols="100"></textarea><br /><br />					
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
	
			<input type="submit" value="Gravar Histórico"/>
		</form>
		<br />
		
		<form name="scliente" method="post" action="s_cliente.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?>"/>
		<input type="submit" value="Voltar para as informações do Cliente"/>
		</form>
		<br />
		
		<form name="alterarhistoricos" method="post" action="ahistorico.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Alterar Históricos"/>
		</form>
		<br />
			
		<a href="mariahelena.php">Voltar para a sua página inicial</a>
		<br />
		
		<a href="logout.php">Sair</a>
	</body>
	
	
</html>