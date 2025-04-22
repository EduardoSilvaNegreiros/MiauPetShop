<?php
$sqlServicos = "CREATE TABLE IF NOT EXISTS tbservicos (
    idServico INT AUTO_INCREMENT PRIMARY KEY,
    nomeServico VARCHAR(100) NOT NULL,
    descricaoServico TEXT,
    precoServico DECIMAL(10, 2) NOT NULL,
    duracaoServico INT NOT NULL
)";

if (mysqli_query($conexao, $sqlServicos)) {
    echo "Tabela tbservicos criada com sucesso!<br>";
} else {
    echo "Erro ao criar a tabela tbservicos: " . mysqli_error($conexao) . "<br>";
}
?>
