<header>
    <h3>Pets</h3> <!-- Título da seção -->
</header>

<div>
    <a href="index.php?menuop=cad-pets">Novo Pet</a> <!-- Link para cadastro de novo pet -->
</div>

<table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Raça</th>
            <th>Idade</th>
            <th>Peso (kg)</th>
            <th>Sexo</th>
            <th>Edição</th>
            <th>Excluir</th>
        </tr>
    </thead>

    <tbody>

        <?php
        $sql = "SELECT
        idPet,
        upper(nomePet) AS nomePet,
        upper(tipoPet) AS tipoPet,
        upper(racaPet) AS racaPet,
        idadePet,
        pesoPet,
    CASE 
        WHEN sexoPet = 'F' THEN 'FEMININO'
        WHEN sexoPet = 'M' THEN 'MASCULINO'
        ELSE 'OUTRO'    
    END AS sexoPet
    FROM tbpets;";

        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao)); // Executa a consulta

        while ($dados = mysqli_fetch_assoc($rs)) { // Loop para percorrer os resultados
        ?>
            <tr>
                <td><?php echo $dados["idPet"] ?></td> <!-- ID do pet -->
                <td><?php echo $dados["nomePet"] ?></td> <!-- Nome do pet -->
                <td><?php echo $dados["tipoPet"] ?></td> <!-- Tipo do pet -->
                <td><?php echo $dados["racaPet"] ?></td> <!-- Raça do pet -->
                <td><?php echo $dados["idadePet"] ?></td> <!-- Idade do pet -->
                <td><?php echo $dados["pesoPet"] ?></td> <!-- Peso do pet -->
                <td><?php echo $dados["sexoPet"] ?></td> <!-- Sexo do pet -->
                <td><a href="index.php?menuop=editar-pet&idPet=<?php echo $dados["idPet"] ?>">Editar</a></td>
                <!-- Link para editar pet -->
                <td><a href="index.php?menuop=excluir-pet&idPet=<?php echo $dados["idPet"] ?>">Excluir</a></td>
                <!-- Link para excluir pet -->
            </tr>
        <?php
        } // Fim do loop
        ?>
    </tbody>
</table>