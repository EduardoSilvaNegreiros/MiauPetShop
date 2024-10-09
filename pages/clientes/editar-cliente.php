<?php 
$idCliente = $_GET['idCliente'];
$sql = "SELECT * FROM tbclientes WHERE idCliente= {$idCliente}";
$rs = mysqli_query($conexao, $sql) or die ('Erro ao recuperar os dados do registro' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
  <h3>Editar Cliente</h3>
</header>

<form action="index.php?menuop=atualiza-cliente" method="POST" class="form">

    <div class="input-group">

        <div class="input-box">

            <div class="input-box">
                <label for="idCliente">ID</label>
                <input type="text" name="idCliente" id="idCliente"  value="<?=$dados['idCliente']?>"> <!-- Campo para id -->
            </div>

            <div class="input-box">
                <label for="nomeCliente">Nome</label>
                <input type="text" name="nomeCliente" id="nomeCliente" value="<?=$dados['nomeCliente']?>"> <!-- Campo para nome -->
            </div>


            <div class="input-box">
                <label for="emailCliente">E-mail</label>
                <input type="email" name="emailCliente" id="emailCliente" value="<?=$dados['emailCliente']?>"> <!-- Campo para e-mail -->
            </div>

            <div class="input-box">
                <label for="telefoneCliente">Telefone</label>
                <input type="text" name="telefoneCliente" id="telefoneCliente" value="<?=$dados['telefoneCliente']?>"> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="enderecoCliente">Endereço</label>
                <input type="text" name="enderecoCliente" id="enderecoCliente" value="<?=$dados['enderecoCliente']?>"> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="sexoCliente">Sexo</label>
                <input type="text" name="sexoCliente" id="sexoCliente" value="<?=$dados['sexoCliente']?>">
            </div>

            <div class="input-box">
                <label for="dataNascCliente">Data de Nascimento</label>
                <input type="date" name="dataNascCliente" id="dataNascCliente" value="<?=$dados['dataNascCliente']?>">
                <!-- Campo para data de nascimento -->
            </div>

            <div class="input-box">
                <label for="cpfCliente">CPF</label>
                <input type="text" name="cpfCliente" id="cpfCliente" value="<?=$dados['cpfCliente']?>"> <!-- Campo para CPF -->
            </div>
        </div>

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add"> 
        </div>

</form>