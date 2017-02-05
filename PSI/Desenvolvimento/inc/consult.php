<?php 
require_once("configuration.php");

$email = $_POST["login"];
$senha = $_POST["password"];

$sql = new SQL();
$resposta = $sql->select("SELECT 
		id,
		nome,
        email,
        senha,
        nascimento,
        rg,
        cpf,
        endereco,
        bairro,
        cep,
        cidade,
        estado,
        caminhoarquivo,
        nomearquivo
    FROM tb_clientes
    WHERE email = '$email' and senha = '$senha';");

if($resposta){

	$data = array();

	foreach ($resposta as $key => $resp) {
		$data["id"] = $resp["id"];
		$data["nome"] = utf8_decode($resp["nome"]);
		$data["email"] = utf8_decode($resp["email"]);
		$data["nascimento"] = date_format(date_create($resp["nascimento"]), 'Y-m-d');
		$data["rg"] = utf8_decode($resp["rg"]);
		$data["cpf"] = $resp["cpf"];
		$data["endereco"] = utf8_decode($resp["endereco"]);
		$data["bairro"] = utf8_decode($resp["bairro"]);
		$data["cep"] = $resp["cep"];
		$data["cidade"] = utf8_decode($resp["cidade"]);
		$data["estado"] = utf8_decode($resp["estado"]);
		$data["caminhoarquivo"] = utf8_decode($resp["caminhoarquivo"]);
		$data["nomearquivo"] = utf8_decode($resp["nomearquivo"]);
	}
	
	require_once("../view/respostaconsulta.php");
	exit;
}
else{
	header("Location: ../view/acesso.php");
}


?>