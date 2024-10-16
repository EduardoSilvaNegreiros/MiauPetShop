<header>
    <h3>Atualizar Serviço</h3>
</header>

<?php
// Obtendo o ID do serviço que será atualizado
$idServico = mysqli_real_escape_string($conexao, $_POST["idServico"]); // Id do serviço
$nomeServico = mysqli_real_escape_string($conexao, $_POST["nomeServico"]); // Nome do serviço
$descricaoServico = mysqli_real_escape_string($conexao, $_POST["descricaoServico"]); // Descrição do serviço
$precoServico = mysqli_real_escape_string($conexao, $_POST["precoServico"]); // Preço do serviço
$duracaoServico = mysqli_real_escape_string($conexao, $_POST["duracaoServico"]); // Duração do serviço
$statusServico = mysqli_real_escape_string($conexao, $_POST["statusServico"]); // Status do serviço

// Consulta para atualizar os dados do serviço
$sql = "UPDATE tbservicos SET
    nomeServico = '{$nomeServico}',
    descricao = '{$descricaoServico}',
    preco = '{$precoServico}',
    duracao = '{$duracaoServico}',
    status = '{$statusServico}'
WHERE id = '{$idServico}'";

// Executando a consulta e lidando com erros
mysqli_query($conexao, $sql) or die("Erro ao executar a consulta! " . mysqli_error($conexao));

// Mensagem de sucesso
echo "O registro foi atualizado com sucesso!";
?>
