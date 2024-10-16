<header>
    <h3>Inserir Pets</h3>
</header>

<?php
$nomePet = mysqli_real_escape_string($conexao, $_POST["nomePet"]);
$tipoPet = mysqli_real_escape_string($conexao, $_POST["tipoPet"]);
$racaPet = mysqli_real_escape_string($conexao, $_POST["racaPet"]);
$sexoPet = mysqli_real_escape_string($conexao, $_POST["sexoPet"]);
$idadePet = mysqli_real_escape_string($conexao, $_POST["idadePet"]);
$pesoPet = mysqli_real_escape_string($conexao, $_POST["pesoPet"]);

$sql = "INSERT INTO tbpets (
    nomePet, 
    tipoPet, 
    racaPet, 
    sexoPet, 
    idadePet, 
    pesoPet
) VALUES (
    '{$nomePet}', 
    '{$tipoPet}', 
    '{$racaPet}', 
    '{$sexoPet}', 
    '{$idadePet}', 
    '{$pesoPet}'
)";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

echo "O registro foi inserido com sucesso!";
?>
