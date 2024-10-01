<header>
    <h3>Inserir Clientes</h3>
</header>

<?php 
    
    
    $nomeCliente = mysqli_real_escape_string($conexao, $_POST["nomeCliente"]);
    $sql = 
?>