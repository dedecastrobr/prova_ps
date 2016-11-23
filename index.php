<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Prova de Programação Script - Cadastro de Contatos</title>

	<!-- Bootstrap core CSS -->
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="navbar.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="./bootstrap/css/style.css" rel="stylesheet">

	<script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="./bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<h1>Bem-vindo ao cadastro de contatos!</h1>

	<div class="form-group col-md-4">
		<div class="row">
			<div class="col-lg-8">
				<div class="input-group">
					<span class="input-group-btn">

						<form action="controllers/ContatoController.php" method="post">
							<input type="hidden" id="op" name="op" value="lista">
							<input type="text" class="form-control" name="contato" placeholder="Buscar contato...">
							<button class="btn btn-default" type="submit">Pesquisar</button>

						</form>
					</span>
				</div>
			</div>
		</div>
	</div>

	<!--TABELA-->
	<div id="list" class="row">
		<div class="table-responsive col-md-12">
			<table class="table table-striped" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>Telefone</th>
						<th>Email</th>
						<th class="actions">Ações</th>
					</tr>
				</thead>

				<tbody>

					<?php
					session_start();
					if (isset($_SESSION['lista'])) {
						$lista = $_SESSION['lista'];
						foreach ($lista as $c) {
					?>

						<tr>
								<td><?php print_r($c['idcontato']) ?></td>  
								<td><?php print_r($c['nome']) ?></td> 
								<td><?php print_r($c['telefone']) ?></td>  
								<td><?php print_r($c['email']) ?></td>  

								<td class="actions">
									<form method="post">
										<input type="hidden" id="op" name="op" value="del">
										<input type="hidden" name="id" value="1001">
									</form>
									<a class="btn btn-xs" href="#">Visualizar</a>
									<a class="btn btn-xs" href="./controllers/ContatoController.php?op=edita&idcontato=<?php print_r ($c['idcontato']) ?>">Editar</a>
									<a class="btn btn-xs"  href="#" data-toggle="modal" data-target="#ins-modal">Excluir</a>

								</td>
							</tr>
							<?php 
						}
					}
					session_destroy();
					?>
				</tbody>
			</table>
		</div>
	</div> 

	<?php 


	?>

</body>
</html>