<?php
$sqlClientes = "CREATE TABLE IF NOT EXISTS tbclientes (
    idCliente INT AUTO_INCREMENT PRIMARY KEY,
    nomeCliente VARCHAR(100) NOT NULL,
    emailCliente VARCHAR(150),
    telefoneCliente VARCHAR(15) NOT NULL,
    enderecoCliente VARCHAR(255) NOT NULL,
    sexoCliente ENUM('Masculino', 'Feminino', 'Outro') NOT NULL,
    dataNascCliente DATE NOT NULL,
    cpfCliente VARCHAR(14) NOT NULL UNIQUE
)";

if (mysqli_query($conexao, $sqlClientes)) {
    echo "Tabela tbclientes criada com sucesso!<br>";
} else {
    echo "Erro ao criar a tabela tbclientes: " . mysqli_error($conexao) . "<br>";
}
?>
