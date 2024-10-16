<header>
    <h3>Atualizar Pet</h3>
</header>

<?php
$idPet = mysqli_real_escape_string($conexao, $_POST["idPet"]); // Id do Pet
$nomePet = mysqli_real_escape_string($conexao, $_POST["nomePet"]); // Nome do Pet
$tipoPet = mysqli_real_escape_string($conexao, $_POST["tipoPet"]); // Tipo do Pet (Cachorro, Gato, etc.)
$racaPet = mysqli_real_escape_string($conexao, $_POST["racaPet"]); // Raça do Pet
$idadePet = mysqli_real_escape_string($conexao, $_POST["idadePet"]); // Idade do Pet
$sexoPet = mysqli_real_escape_string($conexao, $_POST["sexoPet"]); // Sexo do Pet
$pesoPet = mysqli_real_escape_string($conexao, $_POST["pesoPet"]); // Peso do Pet

$sql = "UPDATE tbPets SET
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
