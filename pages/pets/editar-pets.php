<?php
$idPet = $_GET['idPet'];
$sql = "SELECT * FROM tbpets WHERE idPet = {$idPet}";
$rs = mysqli_query($conexao, $sql) or die('Erro ao recuperar os dados do registro: ' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Pet</h3>
</header>

<form action="index.php?menu=atualizar-pet" method="POST" class="form">

    <div class="input-group">

        <div class="input-box">
            <label for="idPet">ID</label>
            <input type="text" name="idPet" id="idPet" value="<?= $dados['idPet'] ?>" readonly>
        </div>

        <div class="input-box">
            <label for="nomePet">Nome</label>
            <input type="text" name="nomePet" id="nomePet" value="<?= $dados['nomePet'] ?>" required>
        </div>

        <div class="input-box">
            <label for="tipoPet">Tipo</label>
            <input type="text" name="tipoPet" id="tipoPet" value="<?= $dados['tipoPet'] ?>" required>
        </div>

        <div class="input-box">
            <label for="racaPet">Raça</label>
            <input type="text" name="racaPet" id="racaPet" value="<?= $dados['racaPet'] ?>" required>
        </div>

        <div class="input-box">
            <label for="sexoPet">Sexo</label>
            <select name="sexoPet" id="sexoPet" required>
                <option value="" disabled>Selecione</option>
                <option value="M" <?= ($dados['sexoPet'] == 'M') ? 'selected' : '' ?>>Masculino</option>
                <option value="F" <?= ($dados['sexoPet'] == 'F') ? 'selected' : '' ?>>Feminino</option>
            </select>
        </div>

        <div class="input-box">
            <label for="idadePet">Idade</label>
            <input type="number" name="idadePet" id="idadePet" value="<?= $dados['idadePet'] ?>" required>
        </div>

        <div class="input-box">
            <label for="pesoPet">Peso (kg)</label>
            <input type="number" step="0.01" name="pesoPet" id="pesoPet" value="<?= $dados['pesoPet'] ?>" required>
        </div>

    </div>

    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add">
    </div>
</form>