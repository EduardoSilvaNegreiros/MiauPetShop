<header>
    <h3>Atualizar Pet</h3>
</header>

<?php
$idPet = mysqli_real_escape_string($conexao, $_POST["idPet"]); // Id do Pet
$nomePet = mysqli_real_escape_string($conexao, $_POST["nomePet"]); // Nome do Pet
$emailPet = mysqli_real_escape_string($conexao, $_POST["emailPet"]); // E-mail do Pet
$dataNascPet = mysqli_real_escape_string($conexao, $_POST["dataNascPet"]); // Data de nascimento do Pet
$cpfPet = mysqli_real_escape_string($conexao, $_POST["cpfPet"]); // CPF do Pet
$sexoPet = mysqli_real_escape_string($conexao, $_POST["sexoPet"]); // Sexo do Pet
$telefonePet = mysqli_real_escape_string($conexao, $_POST["telefonePet"]); // Telefone do Pet
$enderecoPet = mysqli_real_escape_string($conexao, $_POST["enderecoPet"]); // Endereço do Pet

$sql = "UPDATE tbPets SET
  nomePet = '{$nomePet}',
  emailPet = '{$emailPet}',
  dataNascPet = '{$dataNascPet}',
  cpfPet = '{$cpfPet}',
  sexoPet = '{$sexoPet}',
  telefonePet = '{$telefonePet}',
  enderecoPet = '{$enderecoPet}'
  WHERE idPet = '{$idPet}'
";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

echo "O registro foi atualizado com sucesso!";
?>