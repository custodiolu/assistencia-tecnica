<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login - UNITECH</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
    background-color: #f5f5f5;
}

.login-box{
    max-width: 400px;
    margin: 80px auto;
    padding: 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    text-align: center;
}

.logo{
    width: 120px;
    margin-bottom: 20px;
}

</style>

</head>

<body>

<div class="login-box">

    <!-- SUA LOGO (se tiver) -->
    <img src="logo.jpg" class="logo" alt="Logo">

    <h3 class="mb-4">Sistema UNITECH</h3>

    <form action="autenticar.php" method="POST">

        <div class="mb-3 text-start">
            <label>Login</label>
            <input type="text" name="login" class="form-control" required>
        </div>

        <div class="mb-3 text-start">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100">
            <i class="fa-solid fa-right-to-bracket"></i>
            Entrar
        </button>

    </form>

</div>

</body>
</html>