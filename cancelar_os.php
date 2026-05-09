<?php

include("config/conexao.php");

$id = $_GET['id'];

$sql = "UPDATE ordens_servico 
SET status='Cancelada'
WHERE id_os=$id";

mysqli_query($conexao,$sql);

header("Location: listar_os.php?msg=cancelada");

exit();

?>