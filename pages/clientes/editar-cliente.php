<?php 
$idCliente = $_GET['idCliente'];
?>

<header>
  <h3>Editar Cliente</h3>
</header>

<form action="index.php?menuop=atualiza-cliente" method="POST" class="form">

    <div class="input-group">

        <div class="input-box">

            <div class="input-box">
                <label for="idCliente">ID</label>
                <input type="text" name="idCliente" id="idCliente" required> <!-- Campo para id -->
            </div>

            <div class="input-box">
                <label for="nomeCliente">Nome</label>
                <input type="text" name="nomeCliente" id="nomeCliente" required> <!-- Campo para nome -->
            </div>


            <div class="input-box">
                <label for="emailCliente">E-mail</label>
                <input type="email" name="emailCliente" id="emailCliente" required> <!-- Campo para e-mail -->
            </div>

            <div class="input-box">
                <label for="telefoneCliente">Telefone</label>
                <input type="text" name="telefoneCliente" id="telefoneCliente" required> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="enderecoCliente">Endereço</label>
                <input type="text" name="enderecoCliente" id="enderecoCliente" required> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="sexoCliente">Sexo</label>
                <input type="text" name="sexoCliente" id="sexoCliente">
            </div>

            <div class="input-box">
                <label for="dataNascCliente">Data de Nascimento</label>
                <input type="date" name="dataNascCliente" id="dataNascCliente" required>
                <!-- Campo para data de nascimento -->
            </div>

            <div class="input-box">
                <label for="cpfCliente">CPF</label>
                <input type="text" name="cpfCliente" id="cpfCliente" required> <!-- Campo para CPF -->
            </div>
        </div>

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add"> 
        </div>

</form>