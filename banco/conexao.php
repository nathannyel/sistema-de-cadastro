<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

	if (!$conexao) {
		print "Falha ao conectar com o Banco de Dados";
	}
 ?>
