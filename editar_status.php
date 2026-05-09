<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

include("config/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM ordens_servico WHERE id_os = $id";

$resultado = mysqli_query($conexao, $sql);

$os = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>

<head>

<title>Editar Status</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Alterar Status da OS</h2>

<form method="POST" action="atualizar_status.php">

<input type="hidden" name="id_os" value="<?php echo $os['id_os']; ?>">

<label>Status</label>

<select name="status" class="form-control">

<option value="Aberto">Aberto</option>
<option value="Em análise">Em análise</option>
<option value="Concluído">Concluído</option>

</select>

<br>

<button class="btn btn-primary">Atualizar</button>

</form>

</body>
</html>