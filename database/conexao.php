<?php
// Incluir configurações do banco de dados
include('config.php');

// Estabelece a conexão com o banco de dados
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);

// Verifica se houve erro na conexão
if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Função para rodar as migrations
function runMigration($filename, $conexao) {
    include($filename);
}
?>
