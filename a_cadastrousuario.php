<?php
	include "banco.php";
	include "userdata2.php";
	
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


	
	
?>


<html>
	<head>
		<title><?php echo 'Alterar dados do cliente ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>

<form name="formusuario2" method="post" action="s_cliente.php">
			<?php echo "Nome de Usuário"?><br /><br /> <textarea name="nomeUsuario" rows="1" cols="50"><?php echo "$nomeUsuario";?></textarea><br /><br />
			<?php echo "Nome da Criança"?><br /><br /> <textarea name="nomeCrianca" rows="1" cols="50"><?php echo "$nomeCrianca";?></textarea><br /><br />
			<?php echo "Data de Nascimento"?><br /><br /> <textarea name="dataNascimento" rows="1" cols="50"><?php echo traduz_data_para_exibir("$dataNascimento");?></textarea><br /><br />
			<?php echo "Nome do Responsável 1"?><br /><br /> <textarea name="nomeResponsavel1" rows="1" cols="50"><?php echo "$nomeResponsavel1";?></textarea><br /><br />
			<?php echo "CPF do Responsável 1"?><br /><br /> <textarea name="cpfResponsavel1" rows="1" cols="50"><?php echo "$cpfResponsavel1";?></textarea><br /><br />
			<?php echo "Profissão do Responsável 1"?><br /><br /> <textarea name="profissaoResponsavel1" rows="1" cols="50"><?php echo "$profissaoResponsavel1";?></textarea><br /><br />
			<?php echo "Telefone do Responsável 1"?><br /><br /> <textarea name="telefoneResponsavel1" rows="1" cols="50"><?php echo "$telefoneResponsavel1";?></textarea><br /><br />
			<?php echo "Email do Responsável 1"?><br /><br /> <textarea name="emailResponsavel1" rows="1" cols="50"><?php echo "$emailResponsavel1";?></textarea><br /><br />
			<?php echo "Nome do Responsável 2"?><br /><br /> <textarea name="nomeResponsavel2" rows="1" cols="50"><?php echo "$nomeResponsavel2";?></textarea><br /><br />
			<?php echo "CPF do Responsável 2"?><br /><br /> <textarea name="cpfResponsavel2" rows="1" cols="50"><?php echo "$cpfResponsavel2";?></textarea><br /><br />
			<?php echo "Profissão do Responsável 2"?><br /><br /> <textarea name="profissaoResponsavel2" rows="1" cols="50"><?php echo "$profissaoResponsavel2";?></textarea><br /><br />
			<?php echo "Telefone do Responsável 2"?><br /><br /> <textarea name="telefoneResponsavel2" rows="1" cols="50"><?php echo "$telefoneResponsavel2";?></textarea><br /><br />
			<?php echo "Email do Responsável 2"?><br /><br /> <textarea name="emailResponsavel2" rows="1" cols="50"><?php echo "$emailResponsavel2";?></textarea><br /><br />
			<?php echo "Endereço"?><br /><br /> <textarea name="endereco" rows="1" cols="50"><?php echo "$endereco";?></textarea><br /><br />
			<?php echo "Senha"?><br /><br /> <textarea name="senha" rows="1" cols="50"><?php echo "$senha";?></textarea><br /><br />
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="alterarUsuario"/>

			
			<input type="submit" value="Alterar"/>
			
					
	</body>
</html>


