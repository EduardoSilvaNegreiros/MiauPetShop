<?php 
$idPet = $_GET['idPet'];
$sql = "SELECT * FROM tbpets WHERE idPet= {$idPet}";
$rs = mysqli_query($conexao, $sql) or die ('Erro ao recuperar os dados do registro' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
  <h3>Editar Pets</h3>
</header>

<form action="index.php?menuop=atualizar-pet" method="POST" class="form">

    <div class="input-group">

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add"> 
        </div>

</form>