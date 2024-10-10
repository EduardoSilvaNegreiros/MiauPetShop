<?php 
$idFuncionario = $_GET['idFuncionario'];
$sql = "SELECT * FROM tbfuncioarios WHERE idFuncionario= {$idFuncionario}";
$rs = mysqli_query($conexao, $sql) or die ('Erro ao recuperar os dados do registro' . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
  <h3>Editar Funcionario</h3>
</header>

<form action="index.php?menuop=atualiza-funcionario" method="POST" class="form">

    <div class="input-group">


</form>