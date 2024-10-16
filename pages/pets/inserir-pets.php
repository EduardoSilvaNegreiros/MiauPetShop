<header>
    <h3>Inserir Pets</h3>
</header>

<?php
// Assumindo que a conexão já está feita e que a variável $conexao está definida
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

// Executa a consulta e verifica se ocorreu algum erro
if (mysqli_query($conexao, $sql)) {
    echo "O registro foi inserido com sucesso!";
} else {
    // Exibe um erro caso a inserção falhe
    echo "Erro ao executar a consulta: " . mysqli_error($conexao);
}
?>
