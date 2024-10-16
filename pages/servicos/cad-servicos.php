<header class="form-header">
    <h3>Cadastro de Serviço</h3> <!-- Título do formulário -->
</header>

<form action="index.php?menuop=inserir-servicos" method="POST" class="form">

    <!-- Início do formulário -->
    <div class="input-group">

        <!-- Grupo de inputs -->
        <div class="input-box">

            <div class="input-box">
                <label for="nomeServico">Nome do Serviço</label>
                <input type="text" name="nomeServico" id="nomeServico" required> <!-- Campo para nome do serviço -->
            </div>

            <div class="input-box">
                <label for="descricaoServico">Descrição</label>
                <textarea name="descricaoServico" id="descricaoServico" required></textarea> <!-- Campo para descrição do serviço -->
            </div>

            <div class="input-box">
                <label for="precoServico">Preço</label>
                <input type="number" step="0.01" name="precoServico" id="precoServico" required> <!-- Campo para preço do serviço -->
            </div>

            <div class="input-box">
                <label for="duracaoServico">Duração (minutos)</label>
                <input type="number" name="duracaoServico" id="duracaoServico" required> <!-- Campo para duração do serviço -->
            </div>

            <div class="input-box">
                <label for="statusServico">Status</label>
                <select name="statusServico" id="statusServico" required>
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select> <!-- Campo para status do serviço -->
            </div>
        </div>

        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add"> <!-- Botão de envio -->
        </div>
    </div>
</form>
