<?php 
$idFuncionario = $_GET['idFuncionario'];
$sql = "SELECT * FROM tbfuncionarios WHERE idFuncionario= {$idFuncionario}";
$rs = mysqli_query($conexao, $sql) or die ('Erro ao recuperar os dados do registro' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
  <h3>Editar Funcionário</h3>
</header>

<form action="index.php?menuop=atualizar-funcionario" method="POST" class="form">

    <div class="input-group">

        <div class="input-box">

            <div class="input-box">
                <label for="idFuncionario">ID</label>
                <input type="text" name="idFuncionario" id="idFuncionario"  value="<?=$dados['idFuncionario']?>"> <!-- Campo para id -->
            </div>

            <div class="input-box">
                <label for="nomeFuncionario">Nome</label>
                <input type="text" name="nomeFuncionario" id="nomeFuncionario" value="<?=$dados['nomeFuncionario']?>"> <!-- Campo para nome -->
            </div>

            <div class="input-box">
                <label for="cpfFuncionario">CPF</label>
                <input type="text" name="cpfFuncionario" id="cpfFuncionario" value="<?=$dados['cpfFuncionario']?>"> <!-- Campo para CPF -->
            </div>

            <div class="input-box">
                <label for="emailFuncionario">E-mail</label>
                <input type="email" name="emailFuncionario" id="emailFuncionario" value="<?=$dados['emailFuncionario']?>"> <!-- Campo para e-mail -->
            </div>

            <div class="input-box">
                <label for="telefoneFuncionario">Telefone</label>
                <input type="text" name="telefoneFuncionario" id="telefoneFuncionario" value="<?=$dados['telefoneFuncionario']?>"> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="cargoFuncionario">Cargo</label>
                <input type="text" name="cargoFuncionario" id="cargoFuncionario" value="<?=$dados['cargoFuncionario']?>"> <!-- Campo para telefone -->
            </div>

            <div class="input-box">
                <label for="dataContratacao">Data de Contratação</label>
                <input type="text" name="dataContratacao" id="dataContratacao" value="<?=$dados['dataContratacao']?>">
            </div>

            <div class="input-box">
                <label for="salarioFuncionario">Salário</label>
                <input type="text" name="salarioFuncionario" id="salarioFuncionario" value="<?=$dados['salarioFuncionario']?>">
            </div>

            <div class="input-box">
                <label for="statusFuncionario">Status</label>
                <input type="text" name="statusFuncionario" id="statusFuncionario" value="<?=$dados['statusFuncionario']?>">
            </div>
            
        </div>

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar" class="button-add"> 
        </div>
</form>