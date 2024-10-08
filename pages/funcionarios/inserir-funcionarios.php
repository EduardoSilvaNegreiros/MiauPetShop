<!-- /**
* Inserir Funcionários
*
* Esta seção do código é responsável por receber os dados do formulário e
* inserir os mesmos na tabela Funcionarios do banco de dados.
*/ -->

<header>
    <h3>Inserir Funcionários</h3>
</header>

<?php
// Recebe os dados do formulário e protege contra injeção SQL
$nomeFuncionario = mysqli_real_escape_string($conexao, $_POST["nomeFuncionario"]); // Nome do funcionário
$emailFuncionario = mysqli_real_escape_string($conexao, $_POST["emailFuncionario"]); // E-mail do funcionário
$telefoneFuncionario = mysqli_real_escape_string($conexao, $_POST["telefoneFuncionario"]); // Telefone do funcionário
$cargoFuncionario = mysqli_real_escape_string($conexao, $_POST["cargoFuncionario"]); // Cargo do funcionário
$dataContratacao = mysqli_real_escape_string($conexao, $_POST["dataContratacao"]); // Data de contratação
$salarioFuncionario = mysqli_real_escape_string($conexao, $_POST["salarioFuncionario"]); // Salário do funcionário
$statusFuncionario = mysqli_real_escape_string($conexao, $_POST["statusFuncionario"]); // Status do funcionário

// Constrói a instrução SQL para inserir os dados na tabela Funcionarios
$sql = "INSERT INTO Funcionarios (
    nomeFuncionario, 
    emailFuncionario, 
    telefoneFuncionario, 
    cargoFuncionario, 
    dataContratacao, 
    salarioFuncionario, 
    statusFuncionario
) VALUES (
    '{$nomeFuncionario}', 
    '{$emailFuncionario}', 
    '{$telefoneFuncionario}', 
    '{$cargoFuncionario}', 
    '{$dataContratacao}', 
    '{$salarioFuncionario}', 
    '{$statusFuncionario}'
)";

// Executa a instrução SQL
mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

// Caso ocorra tudo corretamente, aparecerá esta mensagem de sucesso
echo "O registro foi inserido com sucesso!";
?>
