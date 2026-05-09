<?php

include("layout/topo.php");
include("config/conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM ordens_servico WHERE id_os=$id";

$resultado = mysqli_query($conexao,$sql);

$os = mysqli_fetch_assoc($resultado);

?>

<h3 class="mb-4">Alterar Status da OS</h3>

<form action="atualizar_status_os.php" method="POST">

<input type="hidden" name="id" value="<?php echo $os['id_os']; ?>">

<div class="mb-3" style="max-width:300px">

<label>Status</label>

<select name="status" class="form-control">

<option value="Aberto">Aberto</option>

<option value="Em análise">Em análise</option>

<option value="Concluído">Concluído</option>

<option value="Cancelada">Cancelada</option>

</select>

</div>

<button class="btn btn-success">

Atualizar Status

</button>

</form>

<?php include("layout/rodape.php"); ?>