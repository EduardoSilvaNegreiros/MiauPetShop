<header class="form-header">
    <h3>Cadastro de Contato</h3>
</header>
<form action="" method="post" class="form">
    <div class="input-group">

        <div class="input-box">
            <label for="nomePet">Nome</label>
            <input type="text" name="nomePet" id="nomePet" required>
        </div>

        <div class="input-box">
            <label for="racaPet">Raça</label>
            <input type="text" name="racaPet" id="racaPet" required>
        </div>

        <div class="input-box">
            <label for="dataNascPet">Data de Nascimento</label>
            <input type="date" name="dataNascPet" id="dataNascPet" required>
        </div>

        <div class="input-box">
            <label for="sexoPet">Sexo</label>
            <select name="sexoPet" id="sexoPet" required>
                <option value="" disabled selected>Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        </div>
    </div>
    <div>
        <input type="submit" value="Adicionar" name="btnAdicionar" class="button-add">
    </div>
</form>