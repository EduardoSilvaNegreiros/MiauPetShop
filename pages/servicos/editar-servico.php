<?php
// Obtendo o ID do serviço através de GET
$idServico = $_GET['idServico'];

// Consulta para selecionar os dados do serviço
$sql = "SELECT * FROM tbservicos WHERE idServico = {$idServico}";

// Executando a consulta e lidando com possíveis erros
$rs = mysqli_query($conexao, $sql) or die('Erro ao recuperar os dados do registro: ' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Serviço</h3>
</header>

<form action="index.php?menuop=atualizar-servico" method="POST" class="form">
    <div class="input-group">

        <!-- Campo ID (readonly) -->
        <div class="input-box">
            <label for="idServico">ID</label>
            <input type="text" name="idServico" id="idServico" value="<?= $dados['idServico'] ?>" readonly>
        </div>

        <!-- Campo Nome do Serviço -->
        <div class="input-box">
            <label for="nomeServico">Nome do Serviço</label>
            <input type="text" name="nomeServico" id="nomeServico" value="<?= $dados['nomeServico'] ?>" required>
        </div>

        <!-- Campo Descrição do Serviço -->
        <div class="input-box">
            <label for="descricaoServico">Descrição</label>
            <input type="text" name="descricaoServico" id="descricaoServico" value="<?= $dados['descricaoServico'] ?>"
                required>
        </div>

        <!-- Campo Preço do Serviço -->
        <div class="input-box">
            <label for="precoServico">Preço</label>
            <input type="text" name="precoServico" id="precoServico" value="<?= $dados['precoServico'] ?>" required>
        </div>

        <!-- Campo Duração do Serviço -->
        <div class="input-box">
            <label for="duracaoServico">Duração (em horas)</label>
            <input type="text" name="duracaoServico" id="duracaoServico" value="<?= $dados['duracaoServico'] ?>" required>
        </div>

        <!-- Campo Status do Serviço -->
        <div class="input-box">
            <label for="statusServico">Status</label>
            <select name="statusServico" id="statusServico" required>
                <option value="" disabled>Selecione</option>
                <option value="ativo" <?= ($dados['statusServico'] == 'ativo') ? 'selected' : '' ?>>Ativo</option>
                <option value="inativo" <?= ($dados['statusServico'] == 'inativo') ? 'selected' : '' ?>>Inativo</option>
            </select>
        </div>

    </div>

    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add">
    </div>
</form>