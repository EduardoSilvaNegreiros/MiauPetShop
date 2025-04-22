<?php
$sqlPets = "CREATE TABLE IF NOT EXISTS tbpets (
    idPet INT AUTO_INCREMENT PRIMARY KEY,
    nomePet VARCHAR(100) NOT NULL,
    tipoPet VARCHAR(50) NOT NULL,
    racaPet VARCHAR(50),
    sexoPet ENUM('Masculino', 'Feminino', 'Outro') NOT NULL,
    idadePet INT NOT NULL,
    pesoPet DECIMAL(5, 2),
    idCliente INT NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES tbclientes(idCliente) ON DELETE CASCADE ON UPDATE CASCADE
)";

if (mysqli_query($conexao, $sqlPets)) {
    echo "Tabela tbpets criada com sucesso!<br>";
} else {
    echo "Erro ao criar a tabela tbpets: " . mysqli_error($conexao) . "<br>";
}
?>
