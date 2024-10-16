<?php 
$idPet = $_GET['idPet'];
$sql = "SELECT * FROM tbPets WHERE idPet= {$idPet}";
$rs = mysqli_query($conexao, $sql) or die ('Erro ao recuperar os dados do registro: ' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
  <h3>Editar Pet</h3>
</header>

<form action="index.php?menuop=atualizar-pet" method="POST" class="form">

    <div class="input-group">

        <div class="input-box">
            <label for="idPet">ID</label>
            <input type="text" name="idPet" id="idPet" value="<?=$dados['idPet']?>" readonly> <!-- Campo para id (readonly) -->
        </div>

        <div class="input-box">
            <label for="nomePet">Nome</label>
            <input type="text" name="nomePet" id="nomePet" value="<?=$dados['nomePet']?>" required> <!-- Campo para nome -->
        </div>

        <div class="input-box">
            <label for="tipoPet">Tipo</label>
            <input type="text" name="tipoPet" id="tipoPet" value="<?=$dados['tipoPet']?>" required> <!-- Campo para tipo -->
        </div>

        <div class="input-box">
            <label for="racaPet">Raça</label>
            <input type="text" name="racaPet" id="racaPet" value="<?=$dados['racaPet']?>" required> <!-- Campo para raça -->
        </div>

        <div class="input-box">
            <label for="sexoPet">Sexo</label>
            <select name="sexoPet" id="sexoPet" required>
                <option value="" disabled>Selecione</option>
                <option value="masculino" <?= ($dados['sexoPet'] == 'masculino') ? 'selected' : '' ?>>Masculino</option>
                <option value="feminino" <?= ($dados['sexoPet'] == 'feminino') ? 'selected' : '' ?>>Feminino</option>
            </select>
        </div>

        <div class="input-box">
            <label for="dataNascPet">Data de Nascimento</label>
            <input type="date" name="dataNascPet" id="dataNascPet" value="<?=$dados['dataNascPet']?>" required>
            <!-- Campo para data de nascimento -->
        </div>

        <div class="input-box">
            <label for="cpfDono">CPF do Dono</label>
            <input type="text" name="cpfDono" id="cpfDono" value="<?=$dados['cpfDono']?>" required> <!-- Campo para CPF do dono -->
        </div>

    </div>

    <div>
        <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add"> 
    </div>
</form>
