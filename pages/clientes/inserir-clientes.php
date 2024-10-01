<!-- /**
* Inserir Clientes
*
* Esta seção do código é responsável por receber os dados do formulário e
* inserir os mesmos na tabela tbClientes do banco de dados.
*/ -->

<header>
    <h3>Inserir Clientes</h3>
</header>

<?php
// Recebe os dados do formulário e protege contra injeção SQL
$nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]); // Nome do cliente
$emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]); // E-mail do cliente
$dataNascCliente = mysqli_real_escape_string($conexao, $_POST["dataNascCliente"]); // Data de nascimento do cliente
$cpfCliente = mysqli_real_escape_string($conexao, $_POST["cpfCliente"]); // CPF do cliente
$sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]); // Sexo do cliente
$telefoneCliente = mysqli_real_escape_string($conexao, $_POST["telefoneCliente"]); // Telefone do cliente
$enderecoCliente = mysqli_real_escape_string($conexao, $_POST["endercoCliente"]); // Endereço do cliente

// Constrói a instrução SQL para inserir os dados na tabela tbClientes
$sql = "INSERT INTO tbclientes (
    nomeCliente, 
    emailCliente, 
    telefoneCliente, 
    enderecoCliente, 
    sexoCliente, 
    dataNascCliente,
    cpfCliente 
) VALUES (
    '{$nomeCliente}', 
    '{$emailCliente}', 
    '{$telefoneCliente}', 
    '{$enderecoCliente}', 
    '{$sexoCliente}',
    '{$dataNascCliente}', 
    '{$cpfCliente}'
)";

// Executa a instrução SQL
mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

// Caso ocorra tudo corretamente, aparecera está msg de sucesso
echo "O registro foi inserido com sucesso!";
?>