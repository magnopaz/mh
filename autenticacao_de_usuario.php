<?php include "banco.php"; ?>
<html>
	<head>
		<title>Autenticando o usuário</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript">
			function loginsuccessfully(){
				setTimeout("window.location='painel.php'", 3000);
				
			}
			function loginfailed(){
				setTimeout("window.location='login.php'", 3000);
				
			}
			function mariahelena(){
				setTimeout("window.location='mariahelena.php'", 3000);
				
			}
		</script>
		
	</head>
	<body>
		<?php
$usuario=mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha=mysqli_real_escape_string($conexao, $_POST['senha']);
if ($usuario == 'admin'){
	$sqlBusca = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
	$sql = mysqli_query($conexao, $sqlBusca);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		session_start();
                $_SESSION['usuario']=$_POST['usuario'];
		$_SESSION['senha']=$_POST['senha'];
		echo "<center>Login efetuado com sucesso!</center>";
		echo "<script>mariahelena()</script>";
	}else{
		echo "<center>Usuário ou senha inválidos!</center>";	
		echo "<script>loginfailed()</script>";
	}

}
else {
$sqlBusca = "SELECT usuario FROM clientes WHERE nomeUsuario = '$usuario' AND senha = '$senha'";
$sql = mysqli_query($conexao, $sqlBusca);
$row = mysqli_num_rows($sql);
$dados = $sql->fetch_array();
if($row > 0){
	session_start();
	$_POST['usuario']=$dados['usuario'];
	$_SESSION['usuario']=$_POST['usuario'];
	$_SESSION['senha']=$_POST['senha'];
	echo "<center>Login efetuado com sucesso!</center>";
	echo "<script>loginsuccessfully()</script>";
}else{
	echo "<center>Usuário ou senha inválidos!</center>";	
	echo "<script>loginfailed()</script>";

}
}
?>
		
		
	</body>
	
</html>




