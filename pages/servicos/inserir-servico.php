<!-- /**
* Inserir Serviços
*
* Esta seção do código é responsável por receber os dados do formulário e
* inserir os mesmos na tabela tbservicos do banco de dados.
*/ -->

<header>
    <h3>Inserir Serviços</h3>
</header>

<?php
// Recebendo e protegendo os dados do formulário contra SQL Injection
$nomeServico = mysqli_real_escape_string($conexao, $_POST["nomeServico"]);
$descricaoServico = mysqli_real_escape_string($conexao, $_POST["descricaoServico"]);
$precoServico = mysqli_real_escape_string($conexao, $_POST["precoServico"]);
$duracaoServico = mysqli_real_escape_string($conexao, $_POST["duracaoServico"]);
$statusServico = mysqli_real_escape_string($conexao, $_POST["statusServico"]);

// Montando a instrução SQL para inserir os dados na tabela tbservicos
$sql = "INSERT INTO tbservicos (
    nomeServico, 
    descricaoServico, 
    precoServico, 
    duracaoServico, 
    statusServico
) VALUES (
    '{$nomeServico}', 
    '{$descricaoServico}', 
    '{$precoServico}', 
    '{$duracaoServico}', 
    '{$statusServico}'
)";

// Executa a instrução SQL
mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!. " . mysqli_error($conexao));

// Caso ocorra tudo corretamente, aparecera está msg de sucesso
echo "O registro foi inserido com sucesso!";
?>