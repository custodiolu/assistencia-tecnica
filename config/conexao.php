<?php

$conexao = mysqli_connect("localhost", "root", "", "assistencia_tecnica");

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

?>