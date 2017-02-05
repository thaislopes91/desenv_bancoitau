<?php 

require_once("configuration.php");

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
$file = $_FILES["comprovante"];

$nomearquivo = $file["name"];
$pastadestino = "download/". $nomearquivo;


if(isset($file["tmp_name"])){

	if(move_uploaded_file($file["tmp_name"], $pastadestino)){
		
		$sql = new SQL();

		$resultado = $sql->query("CALL p_clientes_save('$nome','$email','$senha','$nascimento','$rg','$cpf','$endereco','$bairro','$cep','$cidade','$estado','$pastadestino','$nomearquivo')");
		
		header("Location: ../view/respostacadastro.php");
	}
	else{
		header("Location: ../view/cadastro.php");

	}
}
else{
	header("Location: ../view/cadastro.php");
}


?>