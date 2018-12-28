<?php


	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
include "banco.php";
include "userdata2.php";
include "perguntasCease.php";
$cease1gravar = array();
	
	$cease1gravar['usuario']=$usuario;
	$cease1gravar['pergunta1']=mysqli_real_escape_string($conexao,$_POST['p1']);
	$cease1gravar['pergunta2']=mysqli_real_escape_string($conexao,$_POST['p2']);
	$cease1gravar['pergunta3']=mysqli_real_escape_string($conexao,$_POST['p3']);
	$cease1gravar['pergunta4']=mysqli_real_escape_string($conexao,$_POST['p4']);
	$cease1gravar['pergunta5']=mysqli_real_escape_string($conexao,$_POST['p5']);
	$cease1gravar['pergunta6']=mysqli_real_escape_string($conexao,$_POST['p6']);
	$cease1gravar['pergunta7']=mysqli_real_escape_string($conexao,$_POST['p7']);
	$cease1gravar['pergunta8']=mysqli_real_escape_string($conexao,$_POST['p8']);
	$cease1gravar['pergunta9']=mysqli_real_escape_string($conexao,$_POST['p9']);
	$cease1gravar['pergunta10']=mysqli_real_escape_string($conexao,$_POST['p10']);


	
	//esta variavel é só para facilitar o comando da pesquisa, poderia ser usada a outra variável identica.
	$c10=$_POST['p10'];	
	
	
	
	$sqlGravar = "INSERT INTO cease (usuario, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10) VALUES 
	('{$cease1gravar['usuario']}', '{$cease1gravar['pergunta1']}', '{$cease1gravar['pergunta2']}', '{$cease1gravar['pergunta3']}', '{$cease1gravar['pergunta4']}', '{$cease1gravar['pergunta5']}', '{$cease1gravar['pergunta6']}', 
	'{$cease1gravar['pergunta7']}', '{$cease1gravar['pergunta8']}', '{$cease1gravar['pergunta9']}', '{$cease1gravar['pergunta10']}')";
	mysqli_query($conexao, $sqlGravar);
	//testa a gravação de dados no banco
	$sqlBusca = "SELECT * FROM cease WHERE usuario = '$usuario'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "<center>Gravação da parte 1 do Cease realizada com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}

?>

<html>
	<head>
		<title><?php echo 'Preenchimento de Cease Parte 2 de ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>
		<form name="formcease2" method="post" action="pcease3.php">
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
			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>

			
			<input type="submit" value="Próximo"/>
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
