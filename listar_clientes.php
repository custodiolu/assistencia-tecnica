<?php

include("layout/topo.php");
include("config/conexao.php");

$sql = "SELECT * FROM clientes";

$resultado = mysqli_query($conexao,$sql);

?>

<h3 class="mb-4">Lista de Clientes</h3>

<?php

if(isset($_GET['msg'])){

if($_GET['msg']=="sucesso"){

echo '<div class="alert alert-success">
Cliente cadastrado com sucesso!
</div>';

}

if($_GET['msg']=="excluido"){

echo '<div class="alert alert-danger">
Cliente excluído com sucesso!
</div>';

}

}

?>

<table class="table table-striped table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nome</th>
<th>Telefone</th>
<th>Email</th>
<th>Ações</th>

</tr>

</thead>

<tbody>

<?php

while($cliente = mysqli_fetch_assoc($resultado)){

echo "<tr>";

echo "<td>".$cliente['id_cliente']."</td>";
echo "<td>".$cliente['nome']."</td>";
echo "<td>".$cliente['telefone']."</td>";
echo "<td>".$cliente['email']."</td>";

echo "<td>

<a href='excluir_cliente.php?id=".$cliente['id_cliente']."'
class='btn btn-danger btn-sm'
onclick='return confirm(\"Tem certeza que deseja excluir este cliente?\")'>

Excluir

</a>

</td>";

echo "</tr>";

}

?>

</tbody>

</table>

<a href="clientes.php" class="btn btn-primary">
Cadastrar Cliente
</a>

<?php include("layout/rodape.php"); ?>