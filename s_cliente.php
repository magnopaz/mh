<?php
session_start();
	if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
		header("Location: login.php");
		exit;	
}
include "banco.php";
	include "userdata2.php";
	$sql = "SELECT * FROM anexos WHERE usuario = '$usuario'";
	$resultado = mysqli_query($conexao, $sql);
	$anexos = array();
	
	$exibir_tabela = true;
	$tem_erros = false;
	$erros_validacao = array();
	
	
	if ($_POST['op']=="alterarUsuario"){
		
		$nomeUsuario=mysqli_real_escape_string($conexao, $_POST['nomeUsuario']);
		$nomeCrianca=mysqli_real_escape_string($conexao, $_POST['nomeCrianca']);
		if (isset($_POST['dataNascimento'])&& strlen($_POST['dataNascimento']) > 0) {
			if (validar_data($_POST['dataNascimento'])) {
				$dataNascimento = traduz_data_para_banco($_POST['dataNascimento']);	
			} else {
				//$tem_erros = true;
				$erros_validacao['dataNascimento'] = 'Esta não é uma data válida! Digite no formato "01/01/1900"';
			}
			
		} else {
			//$tem_erros = true;
			$erros_validacao['dataNascimento'] = 'A data de nascimento é obrigatória!';
		}
		
		$nomeResponsavel1=mysqli_real_escape_string($conexao, $_POST['nomeResponsavel1']);
		$cpfResponsavel1=$_POST['cpfResponsavel1'];
		$profissaoResponsavel1=mysqli_real_escape_string($conexao, $_POST['profissaoResponsavel1']);
		$telefoneResponsavel1=mysqli_real_escape_string($conexao, $_POST['telefoneResponsavel1']);
        $emailResponsavel1=mysqli_real_escape_string($conexao, $_POST['emailResponsavel1']);
		$nomeResponsavel2=mysqli_real_escape_string($conexao, $_POST['nomeResponsavel2']);
		$cpfResponsavel2=$_POST['cpfResponsavel2'];
		$profissaoResponsavel2=mysqli_real_escape_string($conexao, $_POST['profissaoResponsavel2']);
		$telefoneResponsavel2=mysqli_real_escape_string($conexao,$_POST['telefoneResponsavel2']);
		$emailResponsavel2=mysqli_real_escape_string($conexao,$_POST['emailResponsavel2']);
		$endereco=mysqli_real_escape_string($conexao, $_POST['endereco']);
		$senha=$_POST['senha'];
	
	
		//gravando dados no banco, função criada dentro do arqui banco.php
		if (!$tem_erros){
			$up = "UPDATE clientes SET nomeUsuario = '$nomeUsuario', nomeCrianca = '$nomeCrianca', dataNascimento = '$dataNascimento',
			nomeResponsavel1 = '$nomeResponsavel1', cpfResponsavel1 = '$cpfResponsavel1', profissaoResponsavel1 = '$profissaoResponsavel1',	telefoneResponsavel1 = '$telefoneResponsavel1', emailResponsavel1 = '$emailResponsavel1',
			nomeResponsavel2 = '$nomeResponsavel2', cpfResponsavel2 = '$cpfResponsavel2', profissaoResponsavel2 = '$profissaoResponsavel2', telefoneResponsavel2 = '$telefoneResponsavel2', emailResponsavel2 = '$emailResponsavel2',
			endereco = '$endereco', senha = '$senha' WHERE usuario = '$usuario'";
		
			//testa a gravação de dados no banco
			mysqli_query($conexao, $up);
			$sqlBusca = "SELECT * FROM clientes WHERE usuario = '$usuario'";
			$sql = mysqli_query($conexao, $sqlBusca);
			$row = mysqli_num_rows($sql);
			$qd = $sql->fetch_array();
			if($nomeCrianca == $qd["nomeCrianca"]){
				echo "<center>Gravação da alteração realizada com sucesso!</center>";
			}else{
				echo "<center>Falha na gravação.</center>";	
			}
		}
	}
	//grava o preencimento do cease
	if ($_POST['op']=="preencherCease"){
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
		$cease1gravar['pergunta11']=mysqli_real_escape_string($conexao,$_POST['p11']);
		$cease1gravar['pergunta12']=mysqli_real_escape_string($conexao,$_POST['p12']);
		$cease1gravar['pergunta13']=mysqli_real_escape_string($conexao,$_POST['p13']);
		$cease1gravar['pergunta14']=mysqli_real_escape_string($conexao,$_POST['p14']);
		$cease1gravar['pergunta15']=mysqli_real_escape_string($conexao,$_POST['p15']);
		$cease1gravar['pergunta16']=mysqli_real_escape_string($conexao,$_POST['p16']);
		$cease1gravar['pergunta17']=mysqli_real_escape_string($conexao,$_POST['p17']);
		$cease1gravar['pergunta18']=mysqli_real_escape_string($conexao,$_POST['p18']);
		$cease1gravar['pergunta19']=mysqli_real_escape_string($conexao,$_POST['p19']);
		$cease1gravar['pergunta20']=mysqli_real_escape_string($conexao,$_POST['p20']);
		$cease1gravar['pergunta21']=mysqli_real_escape_string($conexao,$_POST['p21']);
		$cease1gravar['pergunta22']=mysqli_real_escape_string($conexao,$_POST['p22']);
		$cease1gravar['pergunta23']=mysqli_real_escape_string($conexao,$_POST['p23']);
		$cease1gravar['pergunta24']=mysqli_real_escape_string($conexao,$_POST['p24']);
		$cease1gravar['pergunta25']=mysqli_real_escape_string($conexao,$_POST['p25']);
		$cease1gravar['pergunta26']=mysqli_real_escape_string($conexao,$_POST['p26']);
		$cease1gravar['pergunta27']=mysqli_real_escape_string($conexao,$_POST['p27']);
		$cease1gravar['pergunta28']=mysqli_real_escape_string($conexao,$_POST['p28']);
		$cease1gravar['pergunta29']=mysqli_real_escape_string($conexao,$_POST['p29']);
		$cease1gravar['pergunta30']=mysqli_real_escape_string($conexao,$_POST['p30']);
		$cease1gravar['pergunta31']=mysqli_real_escape_string($conexao,$_POST['p31']);
		
		//esta variavel é só para facilitar o comando da pesquisa, poderia ser usada a outra variável identica.
		$c10=$_POST['p10'];	
		
		
		
		$sqlGravar = "INSERT INTO cease (usuario, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10) VALUES 
		('{$cease1gravar['usuario']}', '{$cease1gravar['pergunta1']}', '{$cease1gravar['pergunta2']}', '{$cease1gravar['pergunta3']}', '{$cease1gravar['pergunta4']}', '{$cease1gravar['pergunta5']}', '{$cease1gravar['pergunta6']}', '{$cease1gravar['pergunta7']}', '{$cease1gravar['pergunta8']}',
		'{$cease1gravar['pergunta9']}', '{$cease1gravar['pergunta10']}', '{$cease1gravar['pergunta11']}', '{$cease1gravar['pergunta12']}', '{$cease1gravar['pergunta13']}', '{$cease1gravar['pergunta14']}', '{$cease1gravar['pergunta15']}', '{$cease1gravar['pergunta16']}', 
		'{$cease1gravar['pergunta17']}', '{$cease1gravar['pergunta18']}', '{$cease1gravar['pergunta19']}', '{$cease1gravar['pergunta20']}', '{$cease1gravar['pergunta21']}', '{$cease1gravar['pergunta22']}', '{$cease1gravar['pergunta23']}', '{$cease1gravar['pergunta24']}', 
		'{$cease1gravar['pergunta25']}', '{$cease1gravar['pergunta26']}', '{$cease1gravar['pergunta27']}', '{$cease1gravar['pergunta28']}', '{$cease1gravar['pergunta29']}', '{$cease1gravar['pergunta30']}', '{$cease1gravar['pergunta31']}')";
		mysqli_query($conexao, $sqlGravar);
		//testa a gravação de dados no banco
		$sqlBusca = "SELECT * FROM cease WHERE usuario = '$usuario'";
		$sql = mysqli_query($conexao, $sqlBusca);
		$row = mysqli_num_rows($sql);
		if($row > 0){
			echo "<center>Gravação do Cease realizada com sucesso!</center>";
		}else{
			echo "<center>Falha na gravação.</center>";	
		}
		$_POST['op']="ok";	
	}
	
	//faz a alteração no cease do cliente
	if ($_POST['op']=="alterarCease"){
	//busca no banco as questões do cease respondidas pelo usuario	
	$sqlBuscaCease = "SELECT * FROM cease WHERE usuario = '$usuario'";
	$sqlCease = mysqli_query($conexao, $sqlBuscaCease);
	$cease = $sqlCease->fetch_array();
	
	//joga nas variáveis os dados das perguntas
	$pg1=mysqli_real_escape_string($conexao,$_POST['p1']);
	$pg2=mysqli_real_escape_string($conexao,$_POST['p2']);
	$pg3=mysqli_real_escape_string($conexao,$_POST['p3']);
	$pg4=mysqli_real_escape_string($conexao,$_POST['p4']);
	$pg5=mysqli_real_escape_string($conexao,$_POST['p5']);
	$pg6=mysqli_real_escape_string($conexao,$_POST['p6']);
	$pg7=mysqli_real_escape_string($conexao,$_POST['p7']);
	$pg8=mysqli_real_escape_string($conexao,$_POST['p8']);
	$pg9=mysqli_real_escape_string($conexao,$_POST['p9']);
	$pg10=mysqli_real_escape_string($conexao,$_POST['p10']);
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
	$pg21=mysqli_real_escape_string($conexao,$_POST['p21']);
	$pg22=mysqli_real_escape_string($conexao,$_POST['p22']);
	$pg23=mysqli_real_escape_string($conexao,$_POST['p23']);
	$pg24=mysqli_real_escape_string($conexao,$_POST['p24']);
	$pg25=mysqli_real_escape_string($conexao,$_POST['p25']);
	$pg26=mysqli_real_escape_string($conexao,$_POST['p26']);
	$pg27=mysqli_real_escape_string($conexao,$_POST['p27']);
	$pg28=mysqli_real_escape_string($conexao,$_POST['p28']);
	$pg29=mysqli_real_escape_string($conexao,$_POST['p29']);
	$pg30=mysqli_real_escape_string($conexao,$_POST['p30']);
	$pg31=mysqli_real_escape_string($conexao,$_POST['p31']);

//gravando dados no banco
$up = "UPDATE cease SET pergunta1 = '$pg1', pergunta2 = '$pg2', pergunta3 = '$pg3', pergunta4 = '$pg4', pergunta5 = '$pg5', pergunta6 = '$pg6', pergunta7 = '$pg7', pergunta8 = '$pg8', pergunta9 = '$pg9', pergunta10 = '$pg10', pergunta11 = '$pg11', pergunta12 = '$pg12', pergunta13 = '$pg13', pergunta14 = '$pg14', pergunta15 = '$pg15', pergunta16 = '$pg16', pergunta17 = '$pg17', pergunta18 = '$pg18', pergunta19 = '$pg19', pergunta20 = '$pg20', pergunta21 = '$pg21', pergunta22 = '$pg22', pergunta23 = '$pg23', pergunta24 = '$pg24', pergunta25 = '$pg25', pergunta26 = '$pg26', pergunta27 = '$pg27', pergunta28 = '$pg28', pergunta29 = '$pg29', pergunta30 = '$pg30', pergunta31 = '$pg31' WHERE usuario = '$usuario'";
mysqli_query($conexao, $up);		
		
			
        include "userdata2.php";	
		$_POST['op']="ok";
	}
	
	
	while ($anexo = mysqli_fetch_assoc($resultado)){
		$anexos[] = $anexo;		
	}

?>



<html>
	<head>
		<title><?php echo 'Informações do Cliente ' . $dados['nomeCrianca'] . '';?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--fonts-->
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

	


		<h1>Informações do Usuário</h1>
		<p><?php echo 'Nome de Usuário: ' . $dados['nomeUsuario'] . '';?></p>
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
		<br />
		
		<?php
		$sql = "SELECT * FROM `historicos` WHERE `usuario` = '$usuario'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo "Não há Históricos registrados para este cliente.";	
		}
		else{
		echo 'Ele tem ' . $query->num_rows . ' históricos registrados';
		}
		?>

		<form name="verhistoricos" method="post" action="v_historico.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Visualizar Históricos"/>
		</form>
		<p></p>


	<?php
		$sql = "SELECT `numero` FROM `receituario` WHERE usuario = '$usuario'";
		$query = $conexao->query($sql);
		if ($query->num_rows < 1){
			echo "Não há indicações registradas para este cliente.";	
		}
		else{
		echo 'Ele tem ' . $query->num_rows . ' indicações registradas';
		?>
		<p></p>				
		<form name="selecionausuario" method="post" action="ver_receita.php">
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
		
				<h2>Anexos</h2>
		<?php if (count($anexos) > 0) : ?>
			<table>
				<tr>
					<th>Arquivo</th>
					<th>Opções</th>
				</tr>
				<?php foreach ($anexos as $anexo) : ?>
					<tr>
						<td><?php echo $anexo['nome']; ?></td>
						<td><a href="anexos/<?php echo $anexo['arquivo']; ?>">
							Download
						</a>
						</td>
					</tr>
					<?php endforeach; ?>
			</table>
			<?php else : ?>
				<p>Não há anexos para este cliente.</p>
				<?php endif; ?>
			
		<p></p>
		
		<form name="alterarusuario" method="post" action="a_cadastrousuario.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Alterar Cadastro do Cliente"/>
		</form>
		<p></p>
		
		<form name="vercease" method="post" action="ver_cease.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Ver Cease do Cliente"/>
		</form>
		<p></p>
		
		<form name="vercease" method="post" action="alterar_cease.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Alterar Cease do Cliente"/>
		</form>
		<p></p>
		
		<form name="vercease" method="post" action="preencher_cease.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Preencher Cease do Cliente"/>
		</form>
		<p></p>
		
		<form name="emitreceituario" method="post" action="ereceituario.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Emitir Indicação"/>
		</form>
		<p></p>
		
		<form name="preencherhistorico" method="post" action="ehistorico.php">
		<input type="hidden" name="usuario" value="<?php echo $usuario; ?> "/>
		<input type="submit" value="Preencher Histórico"/>
		</form>
		<p></p>
		
		<a href="mariahelena.php">Voltar para a sua página inicial</a>
		<p></p>
		
		<a href="logout.php">Sair</a>
	</body>
</html>