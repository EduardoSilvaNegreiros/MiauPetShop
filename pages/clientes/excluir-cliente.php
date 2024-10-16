<header>
  <h3>Excluir Cliente</h3>
</header>

<?php 
  $idCliente = mysqli_real_escape_string($conexao, $_GET["idCliente"]);
  $sql = "DELETE FROM tbclientes WHERE idCliente = '$idCliente'";

  mysqli_query($conexao, $sql) or die("Erro ao excluir o registro." . mysqli_error($conexao));
  echo "Registro excluido com sucesso";
?>