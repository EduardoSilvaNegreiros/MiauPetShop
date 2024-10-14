<header>
    <h3>Atualizar Funcionario</h3>
</header>

<?php
$idFuncionario = mysqli_real_escape_string($conexao, $_POST["idFuncionario"]); 
$nomeFuncionario = mysqli_real_escape_string($conexao, $_POST["nomeFuncionario"]); 
$cpfFuncionario = mysqli_real_escape_string($conexao, $_POST["cpfFuncionario"]); 
$emailFuncionario = mysqli_real_escape_string($conexao, $_POST["emailFuncionario"]);
$telefoneFuncionario = mysqli_real_escape_string($conexao, $_POST["telefoneFuncionario"]); 
$cargoFuncionario = mysqli_real_escape_string($conexao, $_POST["cargoFuncionario"]); 
$dataContratacao = mysqli_real_escape_string($conexao, $_POST["dataContratacao"]); 
$salarioFuncionario = mysqli_real_escape_string($conexao, $_POST["salarioFuncionario"]); 
$statusFuncionario = mysqli_real_escape_string($conexao, $_POST["statusFuncionario"]); 


$sql = "UPDATE tbFuncionarios SET
  nomeFuncionario = '{$nomeFuncionario}',
  emailFuncionario = '{$emailFuncionario}',
  cargoFuncionario = '{$cargoFuncionario}',
  cpfFuncionario = '{$cpfFuncionario}',
  dataContratacao = '{$dataContratacao}',
  telefoneFuncionario = '{$telefoneFuncionario}',
  salarioFuncionario = '{$salarioFuncionario}',
  statusFuncionario = '{$statusFuncionario}'
  WHERE idFuncionario = '{$idFuncionario}'
";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

echo "O registro foi atualizado com sucesso!";
?>