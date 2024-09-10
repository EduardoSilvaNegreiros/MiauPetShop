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
        </tr>
    </thead>
    <?php
    // Definindo uma variável chamada sql para poder selecionar todos os campos da tabela no banco de dados e colocar dentro da do nosso site
    $sql = "SELECT * FROM tbclientes";
    // Executa a consulta SQL e, em caso de erro, exibe uma mensagem e interrompe a execução. O rs é uma abreviação de "result set" (conjunto de resultados), e muitos desenvolvedores a usam para lembrar que aquela variável armazena os resultados de uma consulta SQL
    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta" . mysqli_error($conexao));
    ?>
    <tbody>
        <tr>

            <td>5858</td>
            <td>Eduardo</td>
            <td>edunegreiross@gmail.com</td>
            <td>(11) 99225-2201</td>
            <td>Masculino</td>
            <td>27/03/2006</td>

        </tr>
    </tbody>
</table>