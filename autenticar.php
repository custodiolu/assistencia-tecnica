<?php

session_start();
include("config/conexao.php");

// Verifica se veio do formulário
if(!isset($_POST['login']) || !isset($_POST['senha'])){
    header("Location: login.php");
    exit();
}

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios 
        WHERE login = '$login' 
        AND senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){

    $_SESSION['usuario'] = $login;

    header("Location: dashboard.php");
    exit();

} else {

    echo "<h3>Login inválido!</h3>";
    echo "<a href='login.php'>Voltar</a>";

}

?>