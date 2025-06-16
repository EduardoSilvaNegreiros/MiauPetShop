<?php
$sqlAtendimentos = "CREATE TABLE IF NOT EXISTS tbatendimentos (
    idAtendimento INT AUTO_INCREMENT PRIMARY KEY,
    idPet INT NOT NULL,
    idFuncionario INT NOT NULL,
    dataServico DATE NOT NULL,
    idServico INT NOT NULL,
    FOREIGN KEY (idPet) REFERENCES tbpets(idPet) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idFuncionario) REFERENCES tbfuncionarios(idFuncionario) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (idServico) REFERENCES tbservicos(idServico) ON DELETE CASCADE ON UPDATE CASCADE
)";

if (mysqli_query($conexao, $sqlAtendimentos)) {
    echo "Tabela tbatendimentos criada com sucesso!<br>";
} else {
    echo "Erro ao criar a tabela tbatendimentos: " . mysqli_error($conexao) . "<br>";
}
?>
