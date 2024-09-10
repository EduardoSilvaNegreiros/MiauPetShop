<!-- O arquivo clientes.php é carregado junto ao index, ou seja ele vai ter a conexão com o banco de dados também -->
<header>
    <h3>Clientes</h3>
</header>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Data de Nasc.</th>
            <th>Cpf</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Definindo uma variável chamada sql para poder selecionar todos os campos da tabela no banco de dados e colocar dentro da do nosso site
        $sql = "SELECT * FROM tbclientes";
        // Executa a consulta SQL e, em caso de erro, exibe uma mensagem e interrompe a execução. O rs é uma abreviação de "result set" (conjunto de resultados), e muitos desenvolvedores a usam para lembrar que aquela variável armazena os resultados de uma consulta SQL
        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
        // Inicia um loop para percorrer todos os resultados retornados pela consulta SQL
        while ($dados = mysqli_fetch_assoc($rs)) {
            // A função mysqli_fetch_assoc() pega cada linha de resultado como um array associativo,
            // onde as chaves são os nomes das colunas da tabela e os valores são os dados.
        ?>
            <tr>

                <!-- Exibe o valor do campo "idCliente" da linha atual dentro de uma célula da tabela -->
                <td><?php echo $dados["idCliente"] ?></td>

                <!-- Exibe o valor do campo "nomeCliente" -->
                <td><?php echo $dados["nomeCliente"] ?></td>

                <!-- Exibe o valor do campo "emailCliente" -->
                <td><?php echo $dados["emailCliente"] ?></td>

                <!-- Exibe o valor do campo "telefoneCliente" -->
                <td><?php echo $dados["telefoneCliente"] ?></td>

                <!-- Exibe o valor do campo "sexoCliente" -->
                <td><?php echo $dados["sexoCliente"] ?></td>

                <!-- Exibe o valor do campo "dataNascCliente" -->
                <td><?php echo $dados["dataNascCliente"] ?></td>

                <!-- Exibe o valor do campo "cpfCliente" -->
                <td><?php echo $dados["cpfCliente"] ?></td>
            </tr>
        <?php
            // Fecha o loop, voltando ao início para pegar a próxima linha de resultado, até que não haja mais dados.
        }
        ?>
    </tbody>
</table>