<?php
class Database{

	private $host="localhost";
	private $database="prova_ps";
	private $user="root";
	private $password="";

	function getConn(){
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database) or die ($conn->error);
		return $conn;
	}

}

?>