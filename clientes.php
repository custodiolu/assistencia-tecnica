<?php include("layout/topo.php"); ?>

<h3 class="mb-4">Cadastrar Cliente</h3>

<form action="salvar_cliente.php" method="POST">

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" name="nome" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Telefone</label>
<input type="text" name="telefone" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control">
</div>

<button class="btn btn-primary">
Cadastrar Cliente
</button>

<a href="dashboard.php" class="btn btn-secondary">
Voltar
</a>

</form>

<?php include("layout/rodape.php"); ?>