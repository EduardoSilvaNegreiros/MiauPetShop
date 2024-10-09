<?php
// Conecta ao banco de dados
include("../database/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/home.css" />
    <title>Sobre - Pet Shop</title>
</head>

<body>
    <div class="container">
        <div class="content">

            <header class="header">
                <h1>Pet Shop</h1>
                <nav>
                    <a href="index.php?menuop=funcionarios" class="nav-link">Funcionários</a>
                    <a href="index.php?menuop=clientes" class="nav-link">Clientes</a>
                    <a href="index.php?menuop=servicos" class="nav-link">Serviços</a>
                    <a href="index.php?menuop=pets" class="nav-link">Pets</a>
                </nav>
            </header>

            <main>
                <?php
                // Define a página a ser incluída
                $menuop = isset($_GET["menuop"]) ? $_GET["menuop"] : 'default_value';

                switch ($menuop) {
                    case 'funcionarios':
                        include("funcionarios/funcionarios.php");
                        break;

                    case 'cad-funcionarios':
                        include("funcionarios/cad-funcionarios.php");
                        break;

                    case 'clientes':
                        include("clientes/clientes.php");
                        break;

                    case 'cad-clientes':
                        include("clientes/cad-clientes.php");
                        break;

                    case 'inserir-clientes':
                        include("clientes/inserir-clientes.php");
                        break;

                    case 'editar-cliente':
                        include("clientes/editar-cliente.php");
                        break;

                    case 'servicos':
                        include("servicos.php");
                        break;

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