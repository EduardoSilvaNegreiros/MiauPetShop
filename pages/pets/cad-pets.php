<header class="form-header">
    <h3>Cadastro de Contato</h3> <!-- Título do formulário -->
</header>
<form action="" method="post" class="form">
    <!-- Formulário enviado via POST -->
    <div class="input-group">
        <!-- Agrupamento de campos -->

        <div class="input-box">
            <label for="nomePet">Nome</label>
            <input type="text" name="nomePet" id="nomePet" required> <!-- Nome do pet -->
        </div>

        <div class="input-box">
            <label for="racaPet">Raça</label>
            <input type="text" name="racaPet" id="racaPet" required> <!-- Raça do pet -->
        </div>

        <div class="input-box">
            <label for="sexoPet">Sexo</label>
            <select name="sexoPet" id="sexoPet" required>
                <!-- Seleção de sexo -->
                <option value="" disabled selected>Selecione</option> <!-- Opção padrão -->
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        </div>

        <div class="input-box">
            <label for="dataNascPet">Data de Nascimento</label>
            <input type="date" name="dataNascPet" id="dataNascPet" required> <!-- Data de nascimento -->
        </div>

    </div>
    <div>
        <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add"> <!-- Botão para enviar -->
    </div>
</form>