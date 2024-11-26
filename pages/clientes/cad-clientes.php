<header class="form-header">
    <h3>Cadastro de Cliente</h3> <!-- Título do formulário -->
</header>

<form action="index.php?menu=inserir-clientes" method="POST" class="form">

    <!-- Início do formulário -->
    <div class="input-group">

        <!-- Grupo de inputs -->
        <div class="input-box">

            <div class="input-box">
                <label for="nomeCliente">Nome</label>
                <input type="text" name="nomeCliente" id="nomeCliente" required> <!-- Campo para nome -->
            </div>


            <div class="input-box">
                <label for="emailCliente">E-mail</label>
                <input type="email" name="emailCliente" id="emailCliente" required> <!-- Campo para e-mail -->
            </div>

            <div class="input-box">
                <label for="telefoneCliente">Telefone</label>
                <input type="text" name="telefoneCliente" id="telefoneCliente" required> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="enderecoCliente">Endereço</label>
                <input type="text" name="enderecoCliente" id="enderecoCliente" required> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="sexoCliente">Sexo</label>
                <select name="sexoCliente" id="sexoCliente" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </div>


            <div class="input-box">
                <label for="dataNascCliente">Data de Nascimento</label>
                <input type="date" name="dataNascCliente" id="dataNascCliente" required>
                <!-- Campo para data de nascimento -->
            </div>

            <div class="input-box">
                <label for="cpfCliente">CPF</label>
                <input type="text" name="cpfCliente" id="cpfCliente" required> <!-- Campo para CPF -->
            </div>
        </div>

        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add"> <!-- Botão de envio -->
        </div>
</form>