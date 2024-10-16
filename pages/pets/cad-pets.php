<header class="form-header">
    <h3>Cadastro de Pet</h3> <!-- Título do formulário -->
</header>
<form action="" method="post" class="form">
    <!-- Formulário enviado via POST -->
    <div class="input-group">
        <!-- Agrupamento de campos -->

        <div class="input-box">
            <label for="tipoPet">Tipo</label>
            <select name="tipoPet" id="tipoPet" required>
                <!-- Seleção de tipo -->
                <option value="" disabled selected>Selecione</option> <!-- Opção padrão -->
                <option value="cachorro">Cachorro</option>
                <option value="gato">Gato</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="input-box">
            <label for="nomePet">Nome</label>
            <input type="text" name="nomePet" id="nomePet" required> <!-- Nome do pet -->
        </div>

        <div class="input-box">
            <label for="racaPet">Raça</label>
            <input type="text" name="racaPet" id="racaPet" required> <!-- Raça do pet -->
        </div>

        <div class="input-box">
            <label for="idadePet">Idade</label>
            <input type="number" name="idadePet" id="idadePet" required> <!-- Idade do pet -->
        </div>

        <div class="input-box">
            <label for="sexoPet">Sexo</label>
            <select name="sexoPet" id="sexoPet" required>
                <!-- Seleção de sexo -->
                <option value="" disabled selected>Selecione</option> <!-- Opção padrão -->
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="input-box">
            <label for="pesoPet">Peso (kg)</label>
            <input type="number" name="pesoPet" id="pesoPet" step="0.1" required> <!-- Peso do pet -->
        </div>

    </div>
    <div>
        <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add"> <!-- Botão para enviar -->
    </div>
</form>
