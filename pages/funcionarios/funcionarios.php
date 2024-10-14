<header>
    <h3>Funcionários</h3> <!-- Título da seção -->
</header>

<div>
    <a href="index.php?menuop=cad-funcionarios">Novo Funcionário</a> <!-- Link para cadastro de novo funcionário -->
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Data de Contratação</th>
            <th>Salário</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
      
        <?php
        $sql = "SELECT
            idFuncionario,
            upper(nomeFuncionario) AS nomeFuncionario,
            lower(emailFuncionario) AS emailFuncionario,
            telefoneFuncionario,
            cargoFuncionario,
            DATE_FORMAT(dataContratacao, '%d/%m/%Y') AS dataContratacao,
            salarioFuncionario,
            statusFuncionario
        FROM Funcionarios;";

        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao)); // Executa a consulta

        while ($dados = mysqli_fetch_assoc($rs)) { // Loop para percorrer os resultados
        ?>
            <tr>
                <td><?php echo $dados["idFuncionario"] ?></td> <!-- ID do funcionário -->
                <td><?php echo $dados["nomeFuncionario"] ?></td> <!-- Nome do funcionário -->
                <td><?php echo $dados["cpfFuncionario"] ?></td>
                <td><?php echo $dados["emailFuncionario"] ?></td> <!-- E-mail do funcionário -->
                <td><?php echo $dados["telefoneFuncionario"] ?></td> <!-- Telefone do funcionário -->
                <td><?php echo $dados["cargoFuncionario"] ?></td> <!-- Cargo do funcionário -->
                <td><?php echo $dados["dataContratacao"] ?></td> <!-- Data de contratação do funcionário -->
                <td><?php echo number_format($dados["salarioFuncionario"], 2, ',', '.') ?></td> <!-- Salário do funcionário formatado -->
                <td><?php echo $dados["statusFuncionario"] ?></td> <!-- Status do funcionário -->
                <td><a href="index.php?menuop=editar-funcionario&idfuncionario=<?php echo $dados["idFuncionario"] ?>">Editar</a></td>
                <td><a href="index.php?menuop=excluir-funcionario&idfuncionario=<?php echo $dados["idFuncionario"] ?>">Excluir</a></td>
            </tr>
        <?php
        } // Fim do loop
        ?>
    </tbody>
</table>
