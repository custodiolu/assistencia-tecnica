<?php

include("layout/topo.php");
include("config/conexao.php");

$sql = "SELECT * FROM clientes";

$clientes = mysqli_query($conexao,$sql);

?>

<h3 class="mb-4">Cadastrar Equipamento</h3>

<form action="salvar_equipamento.php" method="POST">

<div class="mb-3">
<label class="form-label">Cliente</label>

<select name="id_cliente" class="form-control">

<?php

while($cliente = mysqli_fetch_assoc($clientes)){

echo "<option value='".$cliente['id_cliente']."'>".$cliente['nome']."</option>";

}

?>

</select>

</div>

<div class="mb-3">
<label class="form-label">Tipo</label>
<input type="text" name="tipo" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Marca</label>
<input type="text" name="marca" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Modelo</label>
<input type="text" name="modelo" class="form-control">
</div>

<button class="btn btn-primary">
Cadastrar Equipamento
</button>

<a href="dashboard.php" class="btn btn-secondary">
Voltar
</a>

</form>

<?php include("layout/rodape.php"); ?>