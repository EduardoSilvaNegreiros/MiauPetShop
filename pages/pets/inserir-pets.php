<header>
    <h3>Inserir Pet</h3>
</header>

<?php
$nomePet = mysqli_real_escape_string($conexao, $_POST["nomePet"]); 

$sql = "INSERT INTO Funcionarios (
    nomePet, 
) VALUES (
    '{$nomePet}', 
)";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

echo "O registro foi inserido com sucesso!";
?>
