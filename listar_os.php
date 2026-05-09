<?php

include("layout/topo.php");
include("config/conexao.php");

$sql = "SELECT 
ordens_servico.id_os,
clientes.nome AS cliente,
equipamentos.marca,
equipamentos.modelo,
ordens_servico.status,
ordens_servico.data_abertura

FROM ordens_servico

INNER JOIN clientes 
ON ordens_servico.id_cliente = clientes.id_cliente

INNER JOIN equipamentos 
ON ordens_servico.id_equipamento = equipamentos.id_equipamento";

$resultado = mysqli_query($conexao,$sql);

?>

<h3 class="mb-4">Ordens de Serviço</h3>

<table class="table table-striped table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Cliente</th>
<th>Equipamento</th>
<th>Status</th>
<th>Data</th>
<th>Ações</th>

</tr>

</thead>

<tbody>

<?php

while($os = mysqli_fetch_assoc($resultado)){

if($os['status']=="Cancelada"){

echo "<tr style='color:red; text-decoration: line-through;'>";

}else{

echo "<tr>";

}

echo "<td>".$os['id_os']."</td>";

echo "<td>".$os['cliente']."</td>";

echo "<td>".$os['marca']." ".$os['modelo']."</td>";

echo "<td>".$os['status']."</td>";

echo "<td>".$os['data_abertura']."</td>";

echo "<td>

<a href='editar_status_os.php?id=".$os['id_os']."'
class='btn btn-primary btn-sm'>
Status
</a>

<a href='cancelar_os.php?id=".$os['id_os']."'
class='btn btn-warning btn-sm'
onclick='return confirm(\"Deseja cancelar esta OS?\")'>
Cancelar
</a>

</td>";

echo "</tr>";

}

?>

</tbody>

</table>

<a href="ordem_servico.php" class="btn btn-success">
Nova Ordem de Serviço
</a>

<?php include("layout/rodape.php"); ?>