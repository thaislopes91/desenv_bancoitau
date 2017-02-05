<?php 

require_once("configuration.php");
$id = $_POST["exclusao"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$nascimento = $_POST["nascimento"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$caminhoarquivo = $_POST["caminhoarquivo"];
$nomearquivo = $_POST["nomearquivo"];
$file = ($_FILES["comprovante"])?$_FILES["comprovante"]:"";

$nomearquivonew = ($file["name"])?$file["name"]:"";
$pastadestino = "download/". $nomearquivonew;

$sql = new SQL();

if($file["name"] != ""){

	if(move_uploaded_file($file["tmp_name"], $pastadestino)){
		$resultado = $sql->query("CALL p_clientes_edit($id,'$nome','$email','$senha','$nascimento','$rg','$cpf','$endereco','$bairro','$cep','$cidade','$estado','$pastadestino','$nomearquivonew')");
		header("Location: ../view/acesso.php");exit;
	}
	else{
		header("Location: ../view/index.php");exit;
	}
}
else{
	$resultado = $sql->query("CALL p_clientes_edit($id,'$nome','$email','$senha','$nascimento','$rg','$cpf','$endereco','$bairro','$cep','$cidade','$estado','$caminhoarquivo','$nomearquivo')");
	header("Location: ../view/acesso.php");exit;
}


?>