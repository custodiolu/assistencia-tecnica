<?php

include("config/conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes (nome, telefone, email)
VALUES ('$nome','$telefone','$email')";

mysqli_query($conexao,$sql);

header("Location: listar_clientes.php?msg=sucesso");

exit();

?>