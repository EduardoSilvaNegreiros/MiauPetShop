<header>
    <h3>Excluir Pet</h3>
</header>

<?php 
$idPet = mysqli_real_escape_string($conexao, $_GET["idPet"]);
$sql = "DELETE FROM tbPets WHERE idPet = '$idPet'";

mysqli_query($conexao, $sql) or die("Erro ao excluir o registro: " . mysqli_error($conexao));
echo "Registro excluído com sucesso!";
?>
