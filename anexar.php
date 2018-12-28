<?php
	include "banco.php";
	include "userdata2.php";
	
	
	if ($_POST['op']=="vacina"){
		$anexo = array();
		$anexo['usuario']=$usuario;
		$anexo['nome']="Cartão_de_Vacina";
		$anexo['arquivo']=$_FILES['anexo']['name'];
	
		$_UP['pasta'] = 'anexos/';
		$nome_final = $_FILES['anexo']['name'];
		if (move_uploaded_file($_FILES['anexo']['tmp_name'],  $_UP['pasta'] . $nome_final)){
			gravar_anexo($conexao, $anexo);
			echo "Upload efetuado com sucesso!";
	  		echo '<p></p><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
			} else {
			  	// Não foi possível fazer o upload, provavelmente a pasta está incorreta
			  	echo "Não foi possível enviar o arquivo, tente novamente";		
			}
		$_POST['op']="ok";
	}
	
	if ($_POST['op']=="mineralograma"){
		$anexo = array();
		$anexo['usuario']=$usuario;
		$anexo['nome']="Mineralograma";
		$anexo['arquivo']=$_FILES['anexo']['name'];
	
		$_UP['pasta'] = 'anexos/';
		$nome_final = $_FILES['anexo']['name'];
		if (move_uploaded_file($_FILES['anexo']['tmp_name'],  $_UP['pasta'] . $nome_final)){
			gravar_anexo($conexao, $anexo);
			echo "Upload efetuado com sucesso!";
	  		echo '<p></p><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
		} else {
		  	// Não foi possível fazer o upload, provavelmente a pasta está incorreta
		  	echo "Não foi possível enviar o arquivo, tente novamente";
		
		}	
		$_POST['op']="ok";	
	}	

	
	if ($_POST['op']=="alergias"){
		$anexo = array();
		$anexo['usuario']=$usuario;
		$anexo['nome']="Exames_de_Alergias";
		$anexo['arquivo']=$_FILES['anexo']['name'];
	
		$_UP['pasta'] = 'anexos/';
		$nome_final = $_FILES['anexo']['name'];
		if (move_uploaded_file($_FILES['anexo']['tmp_name'],  $_UP['pasta'] . $nome_final)){
			gravar_anexo($conexao, $anexo);
			echo "Upload efetuado com sucesso!";
	  		echo '<p></p><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
		} else {
		  	// Não foi possível fazer o upload, provavelmente a pasta está incorreta
		  	echo "Não foi possível enviar o arquivo, tente novamente";		
		}
		$_POST['op']="ok";	
	}
	
	
	
?>

<html>
	<head>
		<title>Anexando arquivo</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MARIA HELENA TURQUETTI - TERAPEUTA CEASE, Tratamento Homeopático para o Autismo, Android Compatible web template, 
Smartphone Compatible web template, Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- start-smoth-scrolling -->
</head>		
	<body>

	</body>
		<h5><p>Clique em "Browser" para escolher o arquivo no seu computador, depois clique em "Anexar" para enviá-lo.</p><p>"Você deve enviar os arquivos digitalizados do cartão de vacina, mineralograma, e os exames de alergias"</p><p>"São aceitos arquivos no formato Jpeg e PDF."</p></h5>
		<?php
		
		$sql = "SELECT * FROM `anexos` WHERE usuario = '$usuario' AND nome = 'Cartão_de_Vacina'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo '<h4 style="color:#FF0000">Você ainda não anexou o Cartão de Vacina.</h4>';		
		}
		else{
			echo "Você já anexou o Cartão de Vacina.";
			echo "<br />";	
		}

		$sql = "SELECT * FROM `anexos` WHERE usuario = '$usuario' AND nome = 'Mineralograma'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo '<h4 style="color:#FF0000">Você ainda não anexou o Mineralograma.</h4>';		
		}
		else{
			echo "Você já anexou o Mineralograma.";
			echo "<br />";	
		}
		
		$sql = "SELECT * FROM `anexos` WHERE usuario = '$usuario' AND nome = 'Exames_de_Alergias'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo '<h4 style="color:#FF0000">Você ainda não anexou os Exames de Alergias.</h4>';
			echo "<br />";	
		}
		else{
			echo "Você já anexou os Exames de Alergias.";
			echo "<br />";
			echo "<br />";	
		}	
		
		?>
		
		
		<form name="anexando" method="post" enctype="multipart/form-data" action="anexar.php">
			<p><h5>Anexe aqui o Cartão de Vacina</h5></p>
			<label>
				<input type="file" name="anexo" />	
			</label>							
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="vacina"/>
			<input type="submit" value="Anexar Cartão de Vacina"/>
		</form>
		<br /><br /><br />
			
			
		<form name="anexando" method="post" enctype="multipart/form-data" action="anexar.php">
			<p><h5>Anexe aqui o Mineralograma</h5></p>
			<label>
				<input type="file" name="anexo" />	
			</label>							
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="mineralograma"/>
			<input type="submit" value="Anexar Mineralograma"/>
		</form>
		<br /><br /><br />
		
		
		<form name="anexando" method="post" enctype="multipart/form-data" action="anexar.php">
			<p><h5>Anexe aqui os Exames de Alergias</h5></p>
			<label>
				<input type="file" name="anexo" />	
			</label>							
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="alergias"/>
			<input type="submit" value="Anexar Exames de Alergias"/>
		</form>
		<br /><br /><br />
		
		
		<form name="painel" method="post" action="painel.php">			
			<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
			<input type="hidden" name="op" value="painel2"/>
			<input type="submit" value="Voltar ao painel do usuario"/>
			</form>
			<br />
			
				
		<a href="logout.php">Sair</a>
	
</html>