<?php
$sqlFuncionarios = "CREATE TABLE IF NOT EXISTS tbfuncionarios (
    idFuncionario INT AUTO_INCREMENT PRIMARY KEY,
    nomeFuncionario VARCHAR(100) NOT NULL,
    cpfFuncionario VARCHAR(14) NOT NULL UNIQUE,
    emailFuncionario VARCHAR(150) NOT NULL,
    telefoneFuncionario VARCHAR(15) NOT NULL,
    cargoFuncionario VARCHAR(50) NOT NULL,
    dataContratacao DATE NOT NULL,
    salarioFuncionario DECIMAL(10, 2) NOT NULL,
    statusFuncionario ENUM('Ativo', 'Inativo') NOT NULL
)";

if (mysqli_query($conexao, $sqlFuncionarios)) {
    echo "Tabela tbfuncionarios criada com sucesso!<br>";
} else {
    echo "Erro ao criar a tabela tbfuncionarios: " . mysqli_error($conexao) . "<br>";
}
?>
