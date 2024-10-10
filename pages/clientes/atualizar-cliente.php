<header>
    <h3>Atualizar Cliente</h3>
</header>

<?php
$idCliente = mysqli_real_escape_string($conexao, $_POST["idCliente"]); // Id do cliente
$nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]); // Nome do cliente
$emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]); // E-mail do cliente
$dataNascCliente = mysqli_real_escape_string($conexao, $_POST["dataNascCliente"]); // Data de nascimento do cliente
$cpfCliente = mysqli_real_escape_string($conexao, $_POST["cpfCliente"]); // CPF do cliente
$sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]); // Sexo do cliente
$telefoneCliente = mysqli_real_escape_string($conexao, $_POST["telefoneCliente"]); // Telefone do cliente
$enderecoCliente = mysqli_real_escape_string($conexao, $_POST["enderecoCliente"]); // Endereço do cliente

$sql = "UPDATE tbclientes SET
  nomeCliente = {$nomeCliente},
  emailCliente = {$emailCliente},
  dataNascCliente = {$dataNascCliente},
  cpfCliente = {$cpfCliente},
  sexoCliente = {$sexoCliente},
  telefoneCliente = {$telefoneCliente},
  enderecoCliente = {$enderecoCliente},
";

// Executa a instrução SQL
mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

// Caso ocorra tudo corretamente, aparecera está msg de sucesso
echo "O registro foi inserido com sucesso!";
?>