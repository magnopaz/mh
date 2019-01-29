<?php
	include "banco.php";

	
/*	session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: site/login.php");
		exit;
	}else{
		echo "Você está logado!";
	}
*/	
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale = 1, shrink-to-fit=no">
    <title>Bem Vinda, Maria Helena</title>
    <link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bibliotecas/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin.min.css">

</head>

<body class="bg-dark" id="page-top">
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <a href="index.html" class="navbar-brand"><img src="images/logo2.png" class="img-responsive" style="width: auto; height: 32px;">Vedovatto</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCurso" aria-control="navbarCurso">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarCurso" class="collapse navbar-collapse">
            <ul class="navbar-nav navbar-sidenav">
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a href="#" class="nav-link">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">Clientes</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper" style="background-color: rgb(209, 209, 209)">
        <div class="container-fluid">
		<?php
		$sql = "SELECT `nomeCrianca`, `usuario` FROM `clientes` ORDER BY `clientes`.`nomeCrianca` ASC";
		$query = $conexao->query($sql);
		echo 'Você tem ' . $query->num_rows . ' clientes registrados';
		?>
		<p></p>				
		<form name="selecionausuario" method="post" action="s_cliente.php">
			<?php echo '<TD>Clientes</TD><TD><SELECT name="usuario">'?>
			<?php 
				while ($nomesclientes = $query->fetch_array()) {
					echo '<OPTION VALUE=' . "$nomesclientes[usuario]" . '>' . "$nomesclientes[nomeCrianca]" . '</OPTION>';
				}
				echo '</SELECT></TD>
					<input type="submit" value="Selecionar"/>
				</form>';?>
		<form name="cadusuario" method="post" action="cadastrarusuario.php">
		<input type="submit" value="Cadastrar Usuário"/>
		</form>
		<p></p>
		

		
		<a href="logout.php">Sair</a>

        </div>
    </div>
    <script src="bibliotecas/jquery/jquery.min.js "></script>
    <script src="bibliotecas/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bibliotecas/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin.min.js" type="text/javascript"></script>
</body>

</html>
