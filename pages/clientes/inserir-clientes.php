<!-- /**
* Inserir Clientes
*
* Esta seção do código é responsável por receber os dados do formulário e
* inserir os mesmos na tabela tabelaclientes do banco de dados.
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
$enderecoCliente = mysqli_real_escape_string($conexao, $_POST["enderecoCliente"]); // Endereço do cliente

// Constrói a instrução SQL para inserir os dados na tabela tabelaclientes
$sql = "INSERT INTO tabelaclientes (
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