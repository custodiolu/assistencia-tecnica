<?php

include("layout/topo.php");
include("config/conexao.php");

$sql = "SELECT * FROM equipamentos";

$resultado = mysqli_query($conexao,$sql);

?>

<h3 class="mb-4">Equipamentos Cadastrados</h3>

<table class="table table-striped table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>ID Cliente</th>
<th>Tipo</th>
<th>Marca</th>
<th>Modelo</th>
<th>Ações</th>

</tr>

</thead>

<tbody>

<?php

while($equip = mysqli_fetch_assoc($resultado)){

echo "<tr>";

echo "<td>".$equip['id_equipamento']."</td>";
echo "<td>".$equip['id_cliente']."</td>";
echo "<td>".$equip['tipo']."</td>";
echo "<td>".$equip['marca']."</td>";
echo "<td>".$equip['modelo']."</td>";

echo "<td>

<a href='excluir_equipamento.php?id=".$equip['id_equipamento']."'
class='btn btn-danger btn-sm'
onclick='return confirm(\"Deseja excluir este equipamento?\")'>

Excluir

</a>

</td>";

echo "</tr>";

}

?>

</tbody>

</table>

<a href="equipamentos.php" class="btn btn-success">
Cadastrar Novo Equipamento
</a>

<?php include("layout/rodape.php"); ?>