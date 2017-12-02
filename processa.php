<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios(nome, email, profissao) values('$nome', '$email', '$profissao')";
$salvar = myqli_query($conexao, $sql);

maysqli_close($conexao);

?>