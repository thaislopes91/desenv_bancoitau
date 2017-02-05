<?php 
require_once("configuration.php");

$sql = new SQL();

$resultado = $sql->query("DELETE FROM tb_clientes WHERE id = ".$_POST["id"]);

echo json_encode(array('success' => "true"));

?>