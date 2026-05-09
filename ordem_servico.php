<?php

include("layout/topo.php");
include("config/conexao.php");

$clientes = mysqli_query($conexao,"SELECT * FROM clientes");

$equipamentos = mysqli_query($conexao,"SELECT * FROM equipamentos");

?>

<h3 class="mb-4">Abrir Ordem de Serviço</h3>

<form action="salvar_os.php" method="POST">

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
<label class="form-label">Equipamento</label>

<select name="id_equipamento" class="form-control">

<?php

while($equip = mysqli_fetch_assoc($equipamentos)){

echo "<option value='".$equip['id_equipamento']."'>".$equip['tipo']." - ".$equip['marca']." ".$equip['modelo']."</option>";

}

?>

</select>

</div>

<div class="mb-3">
<label class="form-label">Descrição do Problema</label>

<textarea name="descricao_problema" class="form-control" rows="4"></textarea>

</div>

<button class="btn btn-primary">
Abrir Ordem de Serviço
</button>

<a href="dashboard.php" class="btn btn-secondary">
Voltar
</a>

</form>

<?php include("layout/rodape.php"); ?>