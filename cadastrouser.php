<?php
	include "adminuser.php";

?>

<html>
	<head>
		<title><?php echo 'Informações sobre ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<h1>Informações</h1>
		<p><?php echo 'Numero do Cliente: ' . $dados['usuario'] . '';?></p>
		<p><?php echo 'Nome da Criança: ' . $dados['nomeCrianca'] . '';?></p>
		<p><?php echo 'Data de Nascimento: ' . $dados['dataNascimento'] . '';?></p>
		<p><?php echo 'Nome da Responsável 1: ' . $dados['nomeResponsavel1'] . '';?></p>
		<p><?php echo 'CPF da Responsável 1: ' . $dados['cpfResponsavel1'] . '';?></p>
		<p><?php echo 'Profissão da Responsável 1: ' . $dados['profissaoResponsavel1'] . '';?></p>
		<p><?php echo 'Telefone da Responsável 1: ' . $dados['telefoneResponsavel1'] . '';?></p>
		<p><?php echo 'Nome do Responsável 2: ' . $dados['nomeResponsavel2'] . '';?></p>
		<p><?php echo 'CPF do Responsável 2: ' . $dados['cpfResponsavel2'] . '';?></p>
		<p><?php echo 'Profissão do Responsável 2: ' . $dados['profissaoResponsavel2'] . '';?></p>
		<p><?php echo 'Telefone do Responsável 2: ' . $dados['TelefoneResponsavel2'] . '';?></p>
		<p><?php echo 'Endereço: ' . $dados['endereco'] . '';?></p>
		<p></p>
		<?php
		$sqlreceita = "SELECT `receita`, `numero` FROM `receituario` WHERE `usuario` = $user";
		$queryreceita = $conexao->query($sqlreceita);
		
		if (($queryreceita->num_rows) < 1){
			echo "Não há receituários cadastrados para este cliente.";?><p></p><?php
			
		}
		else{
			echo 'Existem ' . $queryreceita->num_rows . ' receituários cadastrados para este cliente, selecione abaixo para visualiza-los';
			echo '<p></p>
		
		<form name="receituarioscliente" method="post" action="v_receituario.php">
		<TD>Receituario</TD><TD><SELECT name="receituario">'?>
		<?php while ($receituarioscliente = $queryreceita->fetch_array()) {
			echo '<OPTION VALUE=' . "$receituarioscliente[numero]" . '>' . "$receituarioscliente[numero]" . '</OPTION>';


			
		}
		echo '</SELECT></TD>
		<input type="submit" value="Selecionar"/>
				</form>
				<p></p>';	
			
		}
		$sqlcease = "SELECT `usuario` FROM `cease` WHERE `usuario` = $user";
		$querycease = $conexao->query($sqlcease);
		
		if (($querycease->num_rows) < 1){
			echo "O cliente ainda não preencheu o cease";
			
		}
		?>

		<p><a href="mariahelena.php">Voltar</a></p>
		<p></p>
		<a href="logout.php">Sair</a>


	</body>
	
	
</html>