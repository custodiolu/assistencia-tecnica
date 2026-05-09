<?php

include("config/conexao.php");

$id = $_POST['id_os'];

$status = $_POST['status'];

$sql = "UPDATE ordens_servico 
SET status='$status'
WHERE id_os=$id";

mysqli_query($conexao,$sql);

header("Location: listar_os.php");

?>