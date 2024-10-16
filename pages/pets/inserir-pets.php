<header>
    <h3>Inserir Pets</h3>
</header>

<?php
// Recebe os dados do formulário e protege contra injeção SQL
$nomePet = mysqli_real_escape_string($conexao, $_POST["nomePet"]); // Nome do pet
$tipoPet = mysqli_real_escape_string($conexao, $_POST["tipoPet"]); // Tipo do pet
$racaPet = mysqli_real_escape_string($conexao, $_POST["racaPet"]); // Raça do pet
$sexoPet = mysqli_real_escape_string($conexao, $_POST["sexoPet"]); // Sexo do pet
$dataNascPet = mysqli_real_escape_string($conexao, $_POST["dataNascPet"]); // Data de nascimento do pet
$cpfDono = mysqli_real_escape_string($conexao, $_POST["cpfDono"]); // CPF do dono do pet

// Constrói a instrução SQL para inserir os dados na tabela tbPets
$sql = "INSERT INTO tbPets (
    nomePet, 
    tipoPet, 
    racaPet, 
    sexoPet, 
    dataNascPet, 
    cpfDono
) VALUES (
    '{$nomePet}', 
    '{$tipoPet}', 
    '{$racaPet}', 
    '{$sexoPet}', 
    '{$dataNascPet}', 
    '{$cpfDono}'
)";

// Executa a instrução SQL
mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

// Caso ocorra tudo corretamente, aparecerá esta mensagem de sucesso
echo "O registro foi inserido com sucesso!";
?>
