<header>
  <h3>Serviços</h3> <!-- Título da seção -->
</header>

<div>
  <a href="index.php?menu=cad-servicos" class="link-inserir">Novo Serviço</a>
  <!-- Link para cadastro de novo serviço -->
</div>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço</th>
      <th>Duração (em horas)</th>
      <th>Status</th>
      <th>Edição</th>
      <th>Excluir</th>
    </tr>
  </thead>

  <tbody>
    <?php
    // Consulta para obter os serviços
    $sql = "SELECT
        idServico,
        upper(nomeServico) AS nomeServico,
        descricaoServico,
        precoServico,
        duracaoServico,
        CASE 
            WHEN statusServico = 'ativo' THEN 'ATIVO'
            WHEN statusServico = 'inativo' THEN 'INATIVO'
            ELSE 'OUTRO'    
        END AS statusServico
        FROM tbservicos;";

    // Executa a consulta
    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));

    // Loop para percorrer os resultados
    while ($dados = mysqli_fetch_assoc($rs)) {
    ?>
      <tr>
        <td><?php echo $dados["idServico"] ?></td> <!-- ID do serviço -->
        <td><?php echo $dados["nomeServico"] ?></td> <!-- Nome do serviço -->
        <td><?php echo $dados["descricaoServico"] ?></td> <!-- Descrição do serviço -->
        <td><?php echo $dados["precoServico"] ?></td> <!-- Preço do serviço -->
        <td><?php echo $dados["duracaoServico"] ?></td> <!-- Duração do serviço -->
        <td><?php echo $dados["statusServico"] ?></td> <!-- Status do serviço -->
        <td><a href="index.php?menu=editar-servico&idServico=<?php echo $dados["idServico"] ?>">Editar</a></td>
        <td><a href="index.php?menu=excluir-servico&idServico=<?php echo $dados["idServico"] ?>">Excluir</a></td>
      </tr>
    <?php
    } // Fim do loop
    ?>
  </tbody>
</table>