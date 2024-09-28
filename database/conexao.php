<?php 
// Conexão com o banco de dados
include("config.php");
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro na conexão: " . mysqli_connect_error());
?>