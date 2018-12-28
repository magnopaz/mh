<?php

$host = "localhost";
$user = "u189583655_ccmh";
$pass = "ulukai";
$banco = "u189583655_ccmh";
$conexao = mysqli_connect($host, $user, $pass, $banco);

if (mysqli_connect_errno($conexao)){
	echo "Problemas para conectar no banco. Verifique os dados!";
	die();
}

mysqli_query($conexao, "SET NAMES 'utf8'");
mysqli_query($conexao, 'SET character_set_connection=utf8');
mysqli_query($conexao, 'SET character_set_client=utf8');
mysqli_query($conexao, 'SET character_set_results=utf8');

?>

<?php

function grava_teste($conexao, $dadosgravar){
	$sqlGravar = "INSERT INTO teste (nome, numero, obs) VALUES ('{$dadosgravar['nome']}', '{$dadosgravar['numero']}', '{$dadosgravar['obs']}')";
	mysqli_query($conexao, $sqlGravar);
}

function grava_receituario($conexao, $receituariogravar){
	$sqlGravar = "INSERT INTO receituario (usuario, receita, dataReceita) VALUES ('{$receituariogravar['usuario']}', '{$receituariogravar['receituario']}', '{$receituariogravar['dataReceita']}')";
	mysqli_query($conexao, $sqlGravar);
}

function grava_cliente($conexao, $clientegravar){
	$sqlGravar = "INSERT INTO clientes (nomeUsuario, nomeCrianca, dataNascimento, nomeResponsavel1, cpfResponsavel1, profissaoResponsavel1, telefoneResponsavel1, emailResponsavel1, nomeResponsavel2, cpfResponsavel2, profissaoResponsavel2, telefoneResponsavel2, emailResponsavel2, endereco, senha) VALUES ('{$clientegravar['nomeUsuario']}', '{$clientegravar['nomeCrianca']}',
	 '{$clientegravar['dataNascimento']}', '{$clientegravar['nomeResponsavel1']}', '{$clientegravar['cpfResponsavel1']}', '{$clientegravar['profissaoResponsavel1']}', '{$clientegravar['telefoneResponsavel1']}', '{$clientegravar['emailResponsavel1']}',
	 '{$clientegravar['nomeResponsavel2']}', '{$clientegravar['cpfResponsavel2']}', '{$clientegravar['profissaoResponsavel2']}', '{$clientegravar['telefoneResponsavel2']}', '{$clientegravar['emailResponsavel2']}', '{$clientegravar['endereco']}', '{$clientegravar['senha']}')";
	mysqli_query($conexao, $sqlGravar);
}

function grava_cease1($conexao, $cease1gravar){
	$sqlGravar = "INSERT INTO cease (usuario, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10) VALUES 
	('{$cease1gravar['usuario']}', '{$cease1gravar['pergunta1']}', '{$cease1gravar['pergunta2']}', '{$cease1gravar['pergunta3']}', '{$cease1gravar['pergunta4']}', '{$cease1gravar['pergunta5']}', '{$cease1gravar['pergunta6']}', 
	'{$cease1gravar['pergunta7']}', '{$cease1gravar['pergunta8']}', '{$cease1gravar['pergunta9']}', '{$cease1gravar['pergunta10']}',)";
	mysqli_query($conexao, $sqlGravar);
}


	function dados_cliente($conexao, $user){
		$sql = "SELECT * FROM `clientes` WHERE usuario = '$user'";
		$query = $conexao->query($sql);
		//armazena no array $dados todas as informações da linha do usuário na tabela clientes 
		$dados = $query->fetch_array();
	}

function gravar_anexo($conexao, $anexo){
		$sqlGravar = "INSERT INTO anexos (usuario, nome, arquivo) VALUES ('{$anexo['usuario']}', '{$anexo['nome']}','{$anexo['arquivo']}')";
		mysqli_query($conexao, $sqlGravar);
	
}

function buscar_anexos($conexao, $usuario){
	$sql = "SELECT * FROM anexos WHERE usuario = '$usuario'";
	$resultado = mysqli_query($conexao, $sql);
	$anexos = array();
	
	while ($anexo = mysqli_fetch_assoc($resultado)){
		$anexos[] = $anexo;		
	}
	return $anexos;
}

function traduz_data_para_banco($data){
	if ($data == "") {
	return "";
	}
	$dados = explode("/", $data);
	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
	return $data_mysql;
}

function traduz_data_para_exibir($data){
	if ($data == "" OR $data == "0000-00-00") {
	return "";
	}
	$dados = explode("-", $data);
	$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
	return $data_exibir;
}

function validar_data($data){
	$padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
	$resultado = preg_match($padrao, $data);
	return $resultado;
}

function validar_cpf($cpf){
	$padrao = '/^[0-9]{11}$/';
	$resultado = preg_match($padrao, $data);
	return $resultado;
}

function nl2br2($string) { 
$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string); 
return $string; 
}

function grava_historico($conexao, $historicogravar){
	$sqlGravar = "INSERT INTO historicos (usuario, historico, dataHistorico) VALUES ('{$historicogravar['usuario']}', '{$historicogravar['historico']}', '{$historicogravar['dataHistorico']}')";
	mysqli_query($conexao, $sqlGravar);
} 

?>