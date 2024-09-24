<div class="container">
    <div class="form">
        <header class="form-header">
            <h3>Cadastro de Contato</h3>
        </header>
        <form action="" method="post">
            <div class="input-group">
                <div class="input-box">
                    <label for="cpfCliente">CPF</label>
                    <input type="text" name="cpfCliente" id="cpfCliente" required>
                </div>

                <div class="input-box">
                    <label for="dataNascCliente">Data de Nascimento</label>
                    <input type="date" name="dataNascCliente" id="dataNascCliente" required>
                </div>

                <div class="input-box">
                    <label for="emailCliente">E-mail</label>
                    <input type="email" name="emailCliente" id="emailCliente" required>
                </div>

                <div class="input-box">
                    <label for="nomeCliente">Nome</label>
                    <input type="text" name="nomeCliente" id="nomeCliente" required>
                </div>

                <div class="input-box">
                    <label for="sexoCliente">Sexo</label>
                    <select name="sexoCliente" id="sexoCliente" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="input-box">
                    <label for="telefoneCliente">Telefone</label>
                    <input type="text" name="telefoneCliente" id="telefoneCliente" required>
                </div>
            </div>
            <div>
                <input type="submit" value="Adicionar" name="btnAdicionar">
            </div>
        </form>
    </div>
</div>