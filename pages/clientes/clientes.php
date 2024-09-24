<!-- O arquivo clientes.php é carregado junto ao index, o que significa que ele também terá a conexão com o banco de dados. -->
<header>
    <h3>Clientes</h3>
</header>

<div>
    <!-- Link para redirecionar o usuário para a página de cadastro de clientes dentro da página index, sem sair dela. -->
    <a href="index.php?menuop=cad-clientes">Novo Contato</a>
</div>

<!-- Tabela para exibir os dados dos clientes -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Data de Nasc.</th>
            <th>CPF</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Define a consulta SQL para selecionar todos os campos da tabela 'tbclientes'.
        $sql = "SELECT * FROM tbclientes";

        // Executa a consulta SQL e, se houver erro, exibe uma mensagem e interrompe a execução.
        // $rs armazena o conjunto de resultados da consulta.
        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));

        // Loop para percorrer todas as linhas de resultados retornadas pela consulta SQL.
        while ($dados = mysqli_fetch_assoc($rs)) {
            // A função mysqli_fetch_assoc() retorna cada linha de resultado como um array associativo,
            // onde as chaves são os nomes das colunas da tabela e os valores são os dados da linha atual.
        ?>
        <tr>
            <!-- Exibe o valor do campo "idCliente" da linha atual dentro de uma célula da tabela -->
            <td><?php echo $dados["idCliente"] ?></td>

            <!-- Exibe o valor do campo "nomeCliente" da linha atual -->
            <td><?php echo $dados["nomeCliente"] ?></td>

            <!-- Exibe o valor do campo "emailCliente" da linha atual -->
            <td><?php echo $dados["emailCliente"] ?></td>

            <!-- Exibe o valor do campo "telefoneCliente" da linha atual -->
            <td><?php echo $dados["telefoneCliente"] ?></td>

            <!-- Exibe o valor do campo "sexoCliente" da linha atual -->
            <td><?php echo $dados["sexoCliente"] ?></td>

            <!-- Exibe o valor do campo "dataNascCliente" da linha atual -->
            <td><?php echo $dados["dataNascCliente"] ?></td>

            <!-- Exibe o valor do campo "cpfCliente" da linha atual -->
            <td><?php echo $dados["cpfCliente"] ?></td>
        </tr>
        <?php
            // Fecha o loop, passando para a próxima linha de resultados até que todos os dados tenham sido exibidos.
        }
        ?>
    </tbody>
</table>