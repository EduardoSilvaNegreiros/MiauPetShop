<header>
    <h3>Atualizar Funcionario</h3>
</header>

<?php
$idFuncionario = mysqli_real_escape_string($conexao, $_POST["idFuncionario"]); // Id do Funcionario
$nomeFuncionario = mysqli_real_escape_string($conexao, $_POST["nomeFuncionario"]); // Nome do Funcionario
$emailFuncionario = mysqli_real_escape_string($conexao, $_POST["emailFuncionario"]); // E-mail do Funcionario
$dataNascFuncionario = mysqli_real_escape_string($conexao, $_POST["dataNascFuncionario"]); // Data de nascimento do Funcionario
$cpfFuncionario = mysqli_real_escape_string($conexao, $_POST["cpfFuncionario"]); // CPF do Funcionario
$sexoFuncionario = mysqli_real_escape_string($conexao, $_POST["sexoFuncionario"]); // Sexo do Funcionario
$telefoneFuncionario = mysqli_real_escape_string($conexao, $_POST["telefoneFuncionario"]); // Telefone do Funcionario
$enderecoFuncionario = mysqli_real_escape_string($conexao, $_POST["enderecoFuncionario"]); // Endereço do Funcionario

$sql = "UPDATE tbFuncionarios SET
  nomeFuncionario = '{$nomeFuncionario}',
  emailFuncionario = '{$emailFuncionario}',
  dataNascFuncionario = '{$dataNascFuncionario}',
  cpfFuncionario = '{$cpfFuncionario}',
  sexoFuncionario = '{$sexoFuncionario}',
  telefoneFuncionario = '{$telefoneFuncionario}',
  enderecoFuncionario = '{$enderecoFuncionario}'
  WHERE idFuncionario = '{$idFuncionario}'
";

mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

echo "O registro foi atualizado com sucesso!";
?>