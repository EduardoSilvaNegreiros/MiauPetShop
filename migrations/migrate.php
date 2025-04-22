<?php
session_start();

// Inclui configurações e conexão
include 'database/config.php';
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO);

// Verifica conexão
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Executa migrations
include 'migrations/create_tbfuncionarios_table.php';
include 'migrations/create_tbclientes_table.php';
include 'migrations/create_tbpets_table.php';
include 'migrations/create_tbservicos_table.php';

// Fecha conexão
mysqli_close($conexao);

echo "<strong>Migrations finalizadas com sucesso.</strong>";
