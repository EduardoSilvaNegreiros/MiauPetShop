<header>
  <h3>Excluir Funcionário</h3>
</header>

<?php
$idFuncionario = mysqli_real_escape_string($conexao, $_GET["idFuncionario"]);
$sql = "DELETE FROM tbfuncionarios WHERE idFuncionario = '$idFuncionario'";

mysqli_query($conexao, $sql) or die("Erro ao excluir o registro." . mysqli_error($conexao));
echo "Registro excluido com sucesso";
?>