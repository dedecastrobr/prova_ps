<?php

require_once ("../model/Database.php");

class Contato{
	

	private $id;
	private $nome;
	private $telefone;
	private $email;


	function getId(){
		return $this->id;
	}

	function getNome(){
		return $this->nome;
	}

	function getTelefone(){
		return $this->telefone;
	}

	function getEmail(){
		return $this->email;
	}

	function setId($i){
		$this->id = $i;
	}


	function setNome($n){
		$this->nome = $n;
	}

	function setTelefone($t){
		$this->telefone = $t;
	}

	function setEmail($e){
		$this->email = $e;
	}


	function create(){

		 	$conn = new Database();
 			$c = $conn->getConn();
 			$ins = $c->query("insert into contatos(Nome, telefone, email) values ('".$this->nome."','".$this->telefone."','".$this->email."')");
 			if($ins){
 				header("location:../index.php");
 			}else{
 				print("########### Deu erro<br>");
 				print($c->error);
 			}
	}

	function lista($busca){
			$conn = new Database();
 			$c = $conn->getConn();
 			echo $busca;
 			$lista = $c->query("Select * from contatos where upper(nome) like upper('%$busca%') ");
 			$rows = array();
			while($r = mysqli_fetch_assoc($lista)) {
			    $rows[] = $r;
			}
			session_start();
			$_SESSION['lista'] = $rows;
 			header("location:../index.php");
	}

	function busca($id){
			$conn = new Database();
 			$c = $conn->getConn();
 			$lista = $c->query("Select * from contatos where idcontato = $id ");
 			$contato = array();
			while($r = mysqli_fetch_assoc($lista)) {
			    $contato = $r;
			}
			session_start();
			$_SESSION['contato'] = $contato;
			print_r($contato);
 			header("location:../formContato.php");
	}

	function salva(){
		
		$conn = new Database();
		$c = $conn->getConn();
		$upd = $c->query("update contatos set nome = '$this->nome', telefone = '$this->telefone', email = '$this->email' where idcontato = $this->id");
		if ($upd) {
 			header("location:../index.php");
		}else{
			print_r("DEU ERRO!!!<br>");
			print_r($c->error);

		}
	}


}

?>