<html>
	<head>
		<title>Gravando Cliente</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript">
			function gravasuccessfully(){
				setTimeout("window.location='mariahelena.php'", 5000);
				
			}
			function gravafailed(){
				setTimeout("window.location='cadastrarusuario.php'", 5000);
				
			}
			
		</script>
		
	</head>
	<body>
<?php 
    include "banco.php";
	
	$clientegravar = array();
	$clientegravar['nomeUsuario']=$_POST['nomeUsuario'];
	$clientegravar['nomeCrianca']=$_POST['nomeCrianca'];
	if (isset($_POST['dataNascimento'])) {
		$clientegravar['dataNascimento'] = traduz_data_para_banco($_POST['dataNascimento']);
	} else {
		$clientegravar['dataNascimento'] = '';
	}
	$clientegravar['nomeResponsavel1']=$_POST['nomeResponsavel1'];
	$clientegravar['cpfResponsavel1']=$_POST['cpfResponsavel1'];
	$clientegravar['profissaoResponsavel1']=$_POST['profissaoResponsavel1'];
	$clientegravar['telefoneResponsavel1']=$_POST['telefoneResponsavel1'];
	$clientegravar['nomeResponsavel2']=$_POST['nomeResponsavel2'];
	$clientegravar['cpfResponsavel2']=$_POST['cpfResponsavel2'];
	$clientegravar['profissaoResponsavel2']=$_POST['profissaoResponsavel2'];
	$clientegravar['telefoneResponsavel2']=$_POST['telefoneResponsavel2'];
	$clientegravar['endereco']=$_POST['endereco'];
	$clientegravar['senha']=$_POST['senha'];
	
	//esta variavel é só para facilitar o comando da pesquisa, poderia ser usada a outra variável identica.
	$nc=$_POST['nomeCrianca'];
	$snh=$_POST['senha'];	
	
	//gravando dados no banco, função criada dentro do arqui banco.php
	grava_cliente($conexao, $clientegravar);
	//testa a gravação de dados no banco
	$sqlBusca = "SELECT * FROM clientes WHERE nomeCrianca = '$nc' AND senha = '$snh'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		echo "<center>Cliente gravado com sucesso!</center>";
		echo "<script>gravasuccessfully()</script>";
	}else{
		echo "<center>Falha na gravação.</center>";	
		echo "<script>gravafailed()</script>";
	}
?>
		
		
	</body>
	
</html>






