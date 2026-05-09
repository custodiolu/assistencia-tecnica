<?php

$conexao = mysqli_connect("localhost", "root", "", "assistencia_tecnica");

if ($conexao) {
    echo "OK CONECTADO";
} else {
    echo "ERRO: " . mysqli_connect_error();
}

?>