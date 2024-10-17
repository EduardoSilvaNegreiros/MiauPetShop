<header>
  <h3>Excluir Serviço</h3>
</header>

<?php
// Protegendo o ID do serviço contra SQL Injection
$idServico = mysqli_real_escape_string($conexao, $_GET["idServico"]);

// Consulta para excluir o serviço
$sql = "DELETE FROM tbservicos WHERE idServico = '$idServico'";

// Executando a consulta e lidando com erros
if (mysqli_query($conexao, $sql)) {
  echo "Serviço excluído com sucesso!";
} else {
  die("Erro ao excluir o registro: " . mysqli_error($conexao));
}
?>