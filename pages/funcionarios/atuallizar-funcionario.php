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
$salarioFuncionario = mysqli_real_escape_string($conexao, $_POST["salarioFuncionario"]); 
$dataContratacao = mysqli_real_escape_string($conexao, $_POST["dataContratacao"]); 
$statusFuncionario = mysqli_real_escape_string($conexao, $_POST["statusFuncionario"]); 


$sql = "UPDATE tbFuncionarios SET
  nomeFuncionario = '{$nomeFuncionario}',
  cpfFuncionario = '{$cpfFuncionario}',
  emailFuncionario = '{$emailFuncionario}',
  telefoneFuncionario = '{$telefoneFuncionario}',
  cargoFuncionario = '{$cargoFuncionario}',
  salarioFuncionario = '{$salarioFuncionario}',
  dataContratacao = '{$dataContratacao}'
  statusFuncionario = '{$statusFuncionario}'
  WHERE idFuncionario = '{$idFuncionario}'
";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

echo "O registro foi atualizado com sucesso!";
?>