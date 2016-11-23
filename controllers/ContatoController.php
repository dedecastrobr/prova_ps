<?php

require_once ("../model/Contato.php");

if (isset($_POST['op'])){
	$op = $_POST['op'];
	$id = $_POST['idcontato'];
}elseif (isset($_GET['op'])){
	$op = $_GET['op'];
	$id = $_GET['idcontato'];
}


if ($op == 'ins'){
}elseif ($op == 'lista'){
	$con = new Contato();
	$con->lista($_POST['contato']);
}elseif ($op == 'salva'){
	$con = new Contato();
	$con->setId($_POST['idcontato']);
	$con->setNome($_POST['nome']);
	$con->setTelefone($_POST['telefone']);
	$con->setEmail($_POST['email']);
	$con->salva();
}elseif ($op == 'edita'){
	$con = new Contato();
	$con->busca($id);
}else{
	die("ERRO! Opcao invalida");
}

?>