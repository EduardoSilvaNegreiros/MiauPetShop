<header class="form-header">
    <h3>Cadastro de Funcionário</h3> <!-- Título do formulário -->
</header>

<form action="index.php?menuop=inserir-funcionarios" method="POST" class="form">

    <!-- Início do formulário -->
    <div class="input-group">

        <!-- Grupo de inputs -->
        <div class="input-box">

            <div class="input-box">
                <label for="nomeFuncionario">Nome</label>
                <input type="text" name="nomeFuncionario" id="nomeFuncionario" required> <!-- Campo para nome -->
            </div>

            <div class="input-box">
                <label for="cpfFuncionario">CPF</label>
                <input type="text" name="cpfFuncionario" id="cpfFuncionario" required> <!-- Campo para CPF -->
            </div>

            <div class="input-box">
                <label for="emailFuncionario">E-mail</label>
                <input type="email" name="emailFuncionario" id="emailFuncionario" required> <!-- Campo para e-mail -->
            </div>

            <div class="input-box">
                <label for="telefoneFuncionario">Telefone</label>
                <input type="text" name="telefoneFuncionario" id="telefoneFuncionario" required> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="cargoFuncionario">Cargo</label>
                <input type="text" name="cargoFuncionario" id="cargoFuncionario" required> <!-- Campo para cargo -->
            </div>

            <div class="input-box">
                <label for="dataContratacao">Data de Contratação</label>
                <input type="date" name="dataContratacao" id="dataContratacao" required> <!-- Campo para data de contratação -->
            </div>

            <div class="input-box">
                <label for="salarioFuncionario">Salário</label>
                <input type="text" name="salarioFuncionario" id="salarioFuncionario" required> <!-- Campo para salário -->
            </div>

            <div class="input-box">
                <label for="statusFuncionario">Status Funcionário</label>
                <input type="text" name="statusFuncionario" id="statusFuncionario" required> <!-- Campo para salário -->
            </div>
        </div>

        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add"> <!-- Botão de envio -->
        </div>
    </div>
</form>
