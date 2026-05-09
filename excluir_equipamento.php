<?php

include("config/conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM equipamentos WHERE id_equipamento = $id";

mysqli_query($conexao,$sql);

header("Location: listar_equipamentos.php?msg=excluido");

exit();

?>