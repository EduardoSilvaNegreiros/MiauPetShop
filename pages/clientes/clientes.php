<!-- O arquivo clientes.php é carregado junto ao index, com a conexão ao banco de dados. -->
<header>
    <h3>Clientes</h3> <!-- Título da seção -->
</header>

<div>
    <a href="index.php?menuop=cad-clientes">Novo Cliente</a> <!-- Link para cadastro de novo cliente -->
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data de Nasc.</th>
            <th>CPF</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tbclientes"; // Consulta SQL para selecionar todos os clientes

        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao)); // Executa a consulta

        while ($dados = mysqli_fetch_assoc($rs)) { // Loop para percorrer os resultados
        ?>
        <tr>
            <td><?php echo $dados["idCliente"] ?></td> <!-- ID do cliente -->
            <td><?php echo $dados["nomeCliente"] ?></td> <!-- Nome do cliente -->
            <td><?php echo $dados["emailCliente"] ?></td> <!-- E-mail do cliente -->
            <td><?php echo $dados["telefoneCliente"] ?></td> <!-- Telefone do cliente -->
            <td><?php echo $dados["enderecoCliente"] ?></td> <!-- Endereço do cliente -->
            <td><?php echo $dados["sexoCliente"] ?></td> <!-- Sexo do cliente -->
            <td><?php echo $dados["dataNascCliente"] ?></td> <!-- Data de nascimento do cliente -->
            <td><?php echo $dados["cpfCliente"] ?></td> <!-- CPF do cliente -->
        </tr>
        <?php
        } // Fim do loop
        ?>
    </tbody>
</table>