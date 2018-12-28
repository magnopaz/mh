<html>
	<head>
		<title>Selecione o cliente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<?php
		include "banco.php";
		
		session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
		
		
		$sql = "SELECT `nomeCrianca`, `usuario` FROM `clientes`";
		$query = $conexao->query($sql);
		echo 'Você tem ' . $query->num_rows . ' clientes registrados';
		?>
		<p></p>				
		<form name="cadastrouser" method="post" action="g_receituario.php">
			<?php echo '<TD>Clientes</TD><TD><SELECT name="clientes">'?>
			<?php 
				while ($nomesclientes = $query->fetch_array()) {
					echo '<OPTION VALUE=' . "$nomesclientes[usuario]" . '>' . "$nomesclientes[nomeCrianca]" . '</OPTION>';
				}
				echo '</SELECT></TD>
					<input type="submit" value="Selecionar"/>
				</form>';?>
	</body>
</html>
		