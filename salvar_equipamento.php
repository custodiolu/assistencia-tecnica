<?php

include("config/conexao.php");

$id_cliente = $_POST['id_cliente'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];

$sql = "INSERT INTO equipamentos (id_cliente, tipo, marca, modelo)
VALUES ('$id_cliente','$tipo','$marca','$modelo')";

mysqli_query($conexao,$sql);

header("Location: listar_equipamentos.php?msg=sucesso");

exit();

?>