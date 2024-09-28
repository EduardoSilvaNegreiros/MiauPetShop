<header class="form-header">
    <h3>Cadastro de Contato</h3> <!-- Título do formulário -->
</header>
<form action="" method="post" class="form">
    <!-- Início do formulário -->
    <div class="input-group">
        <!-- Grupo de inputs -->
        <div class="input-box">
            <label for="cpfCliente">CPF</label>
            <input type="text" name="cpfCliente" id="cpfCliente" required> <!-- Campo para CPF -->
        </div>

        <div class="input-box">
            <label for="dataNascCliente">Data de Nascimento</label>
            <input type="date" name="dataNascCliente" id="dataNascCliente" required>
            <!-- Campo para data de nascimento -->
        </div>

        <div class="input-box">
            <label for="emailCliente">E-mail</label>
            <input type="email" name="emailCliente" id="emailCliente" required> <!-- Campo para e-mail -->
        </div>

        <div class="input-box">
            <label for="nomeCliente">Nome</label>
            <input type="text" name="nomeCliente" id="nomeCliente" required> <!-- Campo para nome -->
        </div>

        <div class="input-box">
            <label for="sexoCliente">Sexo</label>
            <select name="sexoCliente" id="sexoCliente" required>
                <!-- Seleção de sexo -->
                <option value="" disabled selected>Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="input-box">
            <label for="telefoneCliente">Telefone</label>
            <input type="text" name="telefoneCliente" id="telefoneCliente" required> <!-- Campo para telefone -->
        </div>
    </div>
    <div>
        <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add"> <!-- Botão de envio -->
    </div>
</form>