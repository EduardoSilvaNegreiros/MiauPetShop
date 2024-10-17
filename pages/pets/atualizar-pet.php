<header>
    <h3>Atualizar Pet</h3>
</header>

<?php
$idPet = mysqli_real_escape_string($conexao, $_POST["idPet"]);
$nomePet = mysqli_real_escape_string($conexao, $_POST["nomePet"]);
$tipoPet = mysqli_real_escape_string($conexao, $_POST["tipoPet"]);
$racaPet = mysqli_real_escape_string($conexao, $_POST["racaPet"]);
$idadePet = mysqli_real_escape_string($conexao, $_POST["idadePet"]);
$sexoPet = mysqli_real_escape_string($conexao, $_POST["sexoPet"]);
$pesoPet = mysqli_real_escape_string($conexao, $_POST["pesoPet"]);

$sql = "UPDATE tbpets SET
    nomePet = '{$nomePet}',
    tipoPet = '{$tipoPet}',
    racaPet = '{$racaPet}',
    idadePet = '{$idadePet}',
    sexoPet = '{$sexoPet}',
    pesoPet = '{$pesoPet}'
    WHERE idPet = '{$idPet}'
";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

echo "O registro foi atualizado com sucesso!";
?>