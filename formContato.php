<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	$idcontato;
	$nome;
	$telefone;
	$email;
	$op = "ins";
	session_start();
	if(isset($_SESSION['contato'])){
		$contato = $_SESSION['contato'];
		$nome = $contato['nome'];
		$idcontato = $contato['idcontato'];
		$telefone = $contato['telefone'];
		$email = $contato['email'];
		$op = "salva";
	}

?>


<form action="./controllers/ContatoController.php" method="post" name="contato">
<div class="row">
	<label for="nome">Nome</label>
	<input id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" type="text">
</div>
<div class="row">
	<label for="telefone">Telefone</label>
	<input id="telefone" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>" type="text">
</div>
<div class="row">
	<label for="email">Email</label>
	<input id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"type="text">
</div>
<div class="row">
<input type="submit" value="Enviar">
</div>
<input id="idcontato" name="idcontato" value="<?php echo htmlspecialchars($idcontato); ?>" type="hidden">
<input id="op" name="op" value="<?php echo htmlspecialchars($op); ?>" type="hidden">

</form>
<?php 		
	session_destroy();
?>

</body>
</html>