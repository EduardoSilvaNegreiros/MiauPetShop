<header class="form-header">
    <h3>Cadastro de Pet</h3>
</header>

<form action="" method="post" class="form">
    <div class="input-group">

        <div class="input-box">
            <label for="tipoPet">Tipo</label>
            <select name="tipoPet" id="tipoPet" required>
                <option value="" disabled selected>Selecione</option>
                <option value="cachorro">Cachorro</option>
                <option value="gato">Gato</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="input-box">
            <label for="nomePet">Nome</label>
            <input type="text" name="nomePet" id="nomePet" required>
        </div>

        <div class="input-box">
            <label for="racaPet">Raça</label>
            <input type="text" name="racaPet" id="racaPet" required>
        </div>

        <div class="input-box">
            <label for="idadePet">Idade</label>
            <input type="number" name="idadePet" id="idadePet" required>
        </div>

        <div class="input-box">
            <label for="sexoPet">Sexo</label>
            <select name="sexoPet" id="sexoPet" required>
                <option value="" disabled selected>Selecione</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="outro">Outro</option>
            </select>
        </div>

        <div class="input-box">
            <label for="pesoPet">Peso (kg)</label>
            <input type="number" name="pesoPet" id="pesoPet" step="0.1" required>
        </div>

    </div>
    <div>
        <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add">
    </div>
</form>
