<?php include("../database/conexao.php"); ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/opcoes.css" />
    <title>Sobre - Pet Shop</title>
</head>

<body>
    <div class="container">

        <div class="content">

            <header class="header">
                <h1>Pet Shop</h1>

                <div class="nav-group">
                    <nav>
                        <a href="index.php?menuop=home" class="nav-link">Home</a>
                        <a href="index.php?menuop=clientes" class="nav-link">Clientes</a>
                        <a href="index.php?menuop=servicos" class="nav-link">Serviços</a>
                        <a href="index.php?menuop=pets" class="nav-link">Pets</a>
                    </nav>
            </header>


            <main>

                <?php
                // Verifica se o parâmetro 'menuop' foi passado na URL (via GET).
                // Se estiver definido, atribui seu valor à variável $menuop.
                // Caso contrário, define $menuop como 'default_value'.
                $menuop = isset($_GET["menuop"]) ? $_GET["menuop"] : 'default_value';

                // Faz um laço de repetição, no caso switch/case, com o a variável $menuop 
                switch ($menuop) {
                    case 'home':
                        include("home.php");
                        break;

                    case 'clientes':
                        include("clientes/clientes.php");
                        break;

                    case 'cad-clientes':
                        include("clientes/cad-clientes.php");
                        break;

                    case 'servicos':
                        include("servicos.php");
                        break;

                    case 'pets':
                        include("pets.php");
                        break;

                    default:
                        include("home.php");
                        break;
                }
                ?>
            </main>

        </div>
    </div>
</body>

</html>