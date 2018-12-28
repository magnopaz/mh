<?php
	
	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}

       include "banco.php";

	

	
	if ($_POST['op']=="painel2"){
		include "userdata2.php";
		$_POST['op']="ok";		
	}else{		
		//coloca na variável $usuario o valor o usuário da seção, pego durante o login 
		$usuario=($_SESSION["usuario"]);
		
		//faz a busca no banco da linha que corresponde ao usuário da seção
		$sql = "SELECT * FROM `clientes` WHERE usuario = '$usuario'";
		$query = $conexao->query($sql);
		//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
		$dados = $query->fetch_array();
		$_SESSION["dados"] =  $dados;
		
		include "userdata.php";		
		
	}
	

?>

<html>
	<head>
		<title><?php echo 'Bem Vindo ao seu Painel de Controle ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	<body>
		<h1>Informações do Usuário</h1>
		<p><?php echo 'Nome do Cliente: ' . $dados['nomeCrianca'] . '';?></p>
		<p><?php echo 'Data de Nascimento: ' . traduz_data_para_exibir($dados['dataNascimento']) . '';?></p>
		<p><?php echo 'Nome do Responsável 1: ' . $dados['nomeResponsavel1'] . '';?></p>
		<p><?php echo 'CPF do Responsável 1: ' . $dados['cpfResponsavel1'] . '';?></p>
		<p><?php echo 'Ocupação do Responsável 1: ' . $dados['profissaoResponsavel1'] . '';?></p>
		<p><?php echo 'Telefone do Responsável 1: ' . $dados['telefoneResponsavel1'] . '';?></p>
		<p><?php echo 'E-mail do Responsável 1: ' . $dados['emailResponsavel1'] . '';?></p>
		<p><?php echo 'Nome do Responsável 2: ' . $dados['nomeResponsavel2'] . '';?></p>
		<p><?php echo 'CPF do Responsável 2: ' . $dados['cpfResponsavel2'] . '';?></p>
		<p><?php echo 'Ocupação do Responsável 2: ' . $dados['profissaoResponsavel2'] . '';?></p>
		<p><?php echo 'Telefone do Responsável 2: ' . $dados['TelefoneResponsavel2'] . '';?></p>
		<p><?php echo 'E-mail do Responsável 2: ' . $dados['emailResponsavel2'] . '';?></p>
		<p><?php echo 'Endereço: ' . $dados['endereco'] . '';?></p>
		<p></p>
		
		<form name="acadusuario" method="post" action="au_cadastrousuario.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Completar/Alterar Informações Pessoais"/>
		</form>
		<p></p>		
		
		<?php
		$sqlcease = "SELECT `usuario` FROM `cease` WHERE `usuario` = $usuario";
		$querycease = $conexao->query($sqlcease);
		
		if (($querycease->num_rows) < 1){
			echo '<form name="pcease" method="post" action="pcease1.php">			
			<input type="hidden" name="usuario" value="' . $usuario . '"/>
			<input type="submit" value="Preencher a Cease"/>
			</form>
			<p></p>';
		}
		else{
			echo '<form name="acease" method="post" action="acease1.php">			
			<input type="hidden" name="usuario" value="' . $usuario . '"/>
			<input type="submit" value="Alterar Cease"/>
			</form>
			<p></p>';	
		}	
		?>
		
		<form name="anexo" method="post" action="anexar.php">			
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Anexar documento digitalizado"/>
		</form>
		<p></p>	
		
		
		
		
		<?php
		$sql = "SELECT `numero` FROM `receituario` WHERE usuario = '$usuario'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo "Não há indicações registradas para você.";	
		}
		else{
		echo 'Você tem ' . $query->num_rows . ' indicações registradas';
		?>
		<p></p>				
		<form name="selecionausuario" method="post" action="ver_receita2.php">
			<?php echo '<TD>Indicação: </TD><TD><SELECT name="receituario">'?>
			<?php 
				while ($r = $query->fetch_array()) {
					echo '<OPTION VALUE=' . "$r[numero]" . '>' . "$r[numero]" . '</OPTION>';
				}
				echo '</SELECT></TD>
					<input type="hidden" name="usuario" value="' . $usuario . '"/>
					<input type="submit" value="Selecionar"/>
				</form>';}?>
		<p></p>


		<a href="logout.php">Sair</a>

		
	</body>
	
	
</html>