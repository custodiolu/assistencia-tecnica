<?php

include("layout/topo.php");

?>

<h3 class="mb-4">Sistema de Assistência Técnica - UNITECH</h3>

<div class="row">

<div class="col-md-4 mb-3">

<a href="clientes.php" class="btn btn-primary w-100 p-3">

<i class="fa-solid fa-user"></i><br><br>
Cadastrar Cliente

</a>

</div>

<div class="col-md-4 mb-3">

<a href="listar_clientes.php" class="btn btn-secondary w-100 p-3">

<i class="fa-solid fa-users"></i><br><br>
Listar Clientes

</a>

</div>

<div class="col-md-4 mb-3">

<a href="equipamentos.php" class="btn btn-primary w-100 p-3">

<i class="fa-solid fa-laptop"></i><br><br>
Cadastrar Equipamento

</a>

</div>

<div class="col-md-4 mb-3">

<a href="listar_equipamentos.php" class="btn btn-secondary w-100 p-3">

<i class="fa-solid fa-desktop"></i><br><br>
Ver Equipamentos

</a>

</div>

<div class="col-md-4 mb-3">

<a href="ordem_servico.php" class="btn btn-success w-100 p-3">

<i class="fa-solid fa-clipboard-list"></i><br><br>
Abrir Ordem de Serviço

</a>

</div>

<div class="col-md-4 mb-3">

<a href="listar_os.php" class="btn btn-dark w-100 p-3">

<i class="fa-solid fa-list"></i><br><br>
Consultar Ordens

</a>

</div>

</div>

<?php include("layout/rodape.php"); ?>