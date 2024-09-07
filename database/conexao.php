<?php 
// Explicação para o conteúdo desta pagina


// serve para incluir um arquivo dentro de outro quando ele é acessado. A sintaxe para utilizar a função é include 'nome do arquivo.php';
include("config.php");


// Variavel para poder se conectar com o banco de dados atraves de uma função já existente chamada de mysqlli
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro na conexão como o servidor " . mysqli_connect_error());
?>