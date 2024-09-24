<?php 
// Este arquivo faz a conexão com o banco de dados para o sistema do Pet Shop.

// Inclui o arquivo 'config.php', que contém as configurações de conexão (constantes para servidor, usuário, senha, etc.)
include("config.php");

// A variável '$conexao' estabelece a conexão com o banco de dados.
// Ela utiliza a função 'mysqli_connect()', passando os parâmetros definidos no arquivo 'config.php' (SERVIDOR, USUARIO, SENHA, BANCO).
// Caso ocorra um erro de conexão, a função 'die()' será executada, interrompendo o script e exibindo uma mensagem de erro com o detalhe da falha.
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro na conexão com o servidor: " . mysqli_connect_error());
?>