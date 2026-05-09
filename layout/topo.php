<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

<title>Sistema Assistência Técnica - UNITECH</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
background:#f5f5f5;
}

.card{
border-radius:10px;
}

.container-sistema{
max-width:900px;
margin:auto;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand d-flex align-items-center" href="dashboard.php">
    <img src="logo.jpg" alt="UNITECH" 
    style="height:45px; 
           filter: drop-shadow(0 0 6px rgba(0,0,0,0.5));
           transition: 0.3s;"
    onmouseover="this.style.transform='scale(1.05)'"
    onmouseout="this.style.transform='scale(1)'">
</a>

<div class="navbar-nav">

<a class="nav-link" href="clientes.php">
<i class="fa-solid fa-user"></i>
Cadastrar Clientes
</a>

<a class="nav-link" href="listar_clientes.php">
<i class="fa-solid fa-laptop"></i>
Clientes
</a>

<a class="nav-link" href="equipamentos.php">
<i class="fa-solid fa-laptop"></i>
Cadastrar Equipamento
</a>

<a class="nav-link" href="listar_equipamentos.php">
<i class="fa-solid fa-desktop"></i>
Equipamentos
</a>

<a class="nav-link" href="ordem_servico.php">
<i class="fa-solid fa-clipboard-list"></i>
Nova OS
</a>

<a class="nav-link" href="listar_os.php">
<i class="fa-solid fa-list"></i>
Ordens
</a>

<a class="nav-link text-danger" href="logout.php">
<i class="fa-solid fa-right-from-bracket"></i>
Sair
</a>

</div>

</div>

</nav>

<div class="container mt-4 container-sistema">

<div class="card shadow">

<div class="card-body">