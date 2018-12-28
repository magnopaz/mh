<?php
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}

	include "banco.php";
	include "userdata2.php";
	

	
?>



<html>
	<head>
		<title><?php echo 'Históricos do Cliente ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
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
				echo '<fieldset>Data: ' . traduz_data_para_exibir($hs[dataHistorico]) . '<br />' . nl2br2($hs[historico]) . '<br /><br /></fieldset>';
			}
		}	
?>
			
			
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
		