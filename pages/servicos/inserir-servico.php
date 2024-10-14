<header>
    <h3>Inserir Servico</h3>
</header>

<?php
$nomeServico = mysqli_real_escape_string($conexao, $_POST["nomeServico"]); 

$sql = "INSERT INTO Funcionarios (
    nomeServico, 
) VALUES (
    '{$nomeServico}', 
)";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

echo "O registro foi inserido com sucesso!";
?>
