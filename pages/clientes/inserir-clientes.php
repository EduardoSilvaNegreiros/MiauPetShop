<header>
    <h3>Inserir Clientes</h3>
</header>

<?php
// Seleção dos campos do formulário
$nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]);
$emailCliente = mysqli_real_escape_string($conexao, $_POST["emailCliente"]);
$dataNascCliente = mysqli_real_escape_string($conexao, $_POST["dataNascCliente"]);
$cpfCliente = mysqli_real_escape_string($conexao, $_POST["cpfCliente"]);
$sexoCliente = mysqli_real_escape_string($conexao, $_POST["sexoCliente"]);
$telefoneCliente = mysqli_real_escape_string($conexao, $_POST["telefoneCliente"]);


// Inserção na tabela tbClientes
$sql = "INSERT INTO tbclientes (
    nomeCliente, 
    emailCliente, 
    dataNascCliente, 
    cpfCliente, 
    sexoCliente, 
    telefoneCliente
    ) 
    VALUES 
    (
    '{$nomeCliente}',
    '{$emailCliente}',
    '{$dataNascCliente}',
    '{$cpfCliente}',
    '{$sexoCliente}',
    '{$telefoneCliente}',
    )";
?>