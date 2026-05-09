<?php

include("config/conexao.php");

$id_cliente = $_POST['id_cliente'];
$id_equipamento = $_POST['id_equipamento'];
$descricao = $_POST['descricao_problema'];

$sql = "INSERT INTO ordens_servico
(id_cliente,id_equipamento,descricao_problema,status,data_abertura)
VALUES
('$id_cliente','$id_equipamento','$descricao','Aberto',NOW())";

mysqli_query($conexao,$sql);

header("Location: listar_os.php?msg=sucesso");

exit();

?>