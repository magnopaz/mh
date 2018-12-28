<?php

		session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;
	}
	include "banco.php";
	include "perguntasCease.php";
	include "userdata2.php";
	
	$pg11=mysqli_real_escape_string($conexao,$_POST['p11']);
	$pg12=mysqli_real_escape_string($conexao,$_POST['p12']);
	$pg13=mysqli_real_escape_string($conexao,$_POST['p13']);
	$pg14=mysqli_real_escape_string($conexao,$_POST['p14']);
	$pg15=mysqli_real_escape_string($conexao,$_POST['p15']);
	$pg16=mysqli_real_escape_string($conexao,$_POST['p16']);
	$pg17=mysqli_real_escape_string($conexao,$_POST['p17']);
	$pg18=mysqli_real_escape_string($conexao,$_POST['p18']);
	$pg19=mysqli_real_escape_string($conexao,$_POST['p19']);
	$pg20=mysqli_real_escape_string($conexao,$_POST['p20']);

	
	//gravando dados no banco, usando um UPDATE
	$up = "UPDATE cease SET pergunta11 = '$pg11', pergunta12 = '$pg12', pergunta13 = '$pg13', pergunta14 = '$pg14', pergunta15 = '$pg15', pergunta16 = '$pg16', pergunta17 = '$pg17', pergunta18 = '$pg18', pergunta19 = '$pg19', pergunta20 = '$pg20' WHERE usuario = '$usuario'";
	

	//testa a gravação de dados no banco
	mysqli_query($conexao, $up);
	$sqlBusca = "SELECT * FROM cease WHERE usuario = '$usuario' AND pergunta20 = '$pg20'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "<center>Gravação da parte 2 do Cease realizada com sucesso!</center>";
	}else{
		echo "<center>Falha na gravação.</center>";	
	}


?>

<html>
	<head>
		<title><?php echo 'Preenchimento de Cease Parte 3 de ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>
		<form name="formcease3" method="post" action="v_cease.php">
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

			
			
			<input type="submit" value="Enviar e Visualizar"/>
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
