<?php
// Inclui o arquivo de conexão com o banco de dados.
include("../database/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Definição do charset para garantir que a página suporte caracteres especiais. -->
    <meta charset="UTF-8" />
    <!-- Configura a visualização em dispositivos móveis para melhorar a responsividade. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Inclui o arquivo CSS que contém os estilos da página. -->
    <link rel="stylesheet" href="../assets/css/home.css" />
    <!-- Título da página, que será exibido na aba do navegador. -->
    <title>Sobre - Pet Shop</title>
</head>

<body>
    <div class="container">

        <div class="content">

            <header class="header">
                <h1>Pet Shop</h1>

                <div class="nav-group">
                    <nav>
                        <!-- Links de navegação que apontam para diferentes seções da aplicação. -->
                        <a href="index.php?menuop=funcionarios" class="nav-link">Funcionários</a>
                        <a href="index.php?menuop=clientes" class="nav-link">Clientes</a>
                        <a href="index.php?menuop=servicos" class="nav-link">Serviços</a>
                        <a href="index.php?menuop=pets" class="nav-link">Pets</a>
                    </nav>
                </div> <!-- Esta div estava sem fechamento -->
            </header>

            <main>

                <?php
                // Verifica se a variável 'menuop' foi passada via GET na URL.
                // Se estiver presente, atribui o valor da variável ao $menuop.
                // Caso contrário, define o valor de $menuop como 'default_value'.
                $menuop = isset($_GET["menuop"]) ? $_GET["menuop"] : 'default_value';

                // Estrutura de controle switch/case para carregar diferentes páginas com base no valor de $menuop.
                switch ($menuop) {
                        // Caso o valor de $menuop seja 'home', inclui o arquivo 'home.php'.
                    case 'funcionarios':
                        include("funcionarios/funcionarios.php");
                        break;

                    case 'cad-funcionarios':
                        include("funcionarios/cad-funcionarios.php");
                        break;

                        // Caso o valor de $menuop seja 'clientes', inclui o arquivo 'clientes.php' dentro da pasta 'clientes'.
                    case 'clientes':
                        include("clientes/clientes.php");
                        break;

                        // Caso o valor de $menuop seja 'cad-clientes', inclui o arquivo 'cad-clientes.php' dentro da pasta 'clientes'.
                    case 'cad-clientes':
                        include("clientes/cad-clientes.php");
                        break;

                        // Caso o valor de $menuop seja 'servicos', inclui o arquivo 'servicos.php'.
                    case 'servicos':
                        include("servicos.php");
                        break;

                        // Caso o valor de $menuop seja 'pets', inclui o arquivo 'pets.php'.
                    case 'pets':
                        include("pets/pets.php");
                        break;

                    case 'cad-pets':
                        include("../pages/pets/cad-pets.php");
                        break;

                    default:
                        include("funcionarios/funcionarios.php");
                        break;
                }
                ?>
            </main>

        </div>
    </div>
</body>

</html>