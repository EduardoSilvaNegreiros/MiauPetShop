<?php
// Conexão com o banco de dados
include("../database/conexao.php");

// Definindo o valor padrão para o parâmetro 'menuop'
$menuop = isset($_GET["menuop"]) ? $_GET["menuop"] : 'funcionarios'; // Valor padrão modificado para 'funcionarios'
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

            <!-- Cabeçalho com navegação -->
            <header class="header">
                <h1>Pet Shop</h1>
                <nav>
                    <a href="index.php?menuop=funcionarios" class="nav-link">Funcionários</a>
                    <a href="index.php?menuop=clientes" class="nav-link">Clientes</a>
                    <a href="index.php?menuop=servicos" class="nav-link">Serviços</a>
                    <a href="index.php?menuop=pets" class="nav-link">Pets</a>
                </nav>
            </header>

            <!-- Conteúdo principal -->
            <main>
                <?php
                // Inclui a página correspondente ao valor de 'menuop'
                switch ($menuop) {
                    // Funcionalidades relacionadas aos funcionários
                    case 'funcionarios':
                        include("funcionarios/funcionarios.php");
                        break;
                    case 'cad-funcionarios':
                        include("funcionarios/cad-funcionarios.php");
                        break;
                    case 'inserir-funcionarios':
                        include("funcionarios/inserir-funcionarios.php");
                        break;
                    case 'editar-funcionario':
                        include("funcionarios/editar-funcionario.php");
                        break;
                    case 'atualizar-funcionario':
                        include("funcionarios/atualizar-funcionario.php");
                        break;
                    case 'excluir-funcionario':
                        include("funcionarios/excluir-funcionario.php");
                        break;

                    // Funcionalidades relacionadas aos clientes
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
                    case 'atualizar-cliente':
                        include("clientes/atualizar-cliente.php");
                        break;
                    case 'excluir-cliente':
                        include("clientes/excluir-cliente.php");
                        break;

                    // Funcionalidades relacionadas aos serviços
                    case 'servicos':
                        include("servicos/servicos.php");
                        break;

                    case 'cad-servicos':
                        include("servicos/cad-servicos.php");
                        break;

                    case 'editar-servico':
                        include("servicos/editar-servico.php");
                        break;

                    case 'atualizar-servico':
                        include("servicos/atualizar-servico.php");
                        break;

                    case 'inserir-servicos':
                        include("servicos/inserir-servico.php");
                        break;

                    case 'excluir-servico':
                        include("servicos/excluir-servico.php");
                        break;
                    
                    // Funcionalidades relacionadas aos pets
                    case 'pets':
                        include("pets/pets.php");
                        break;
                    case 'cad-pets':
                        include("pets/cad-pets.php");
                        break;
                    case 'editar-pet':
                        include("pets/editar-pets.php");
                        break;
                    case 'atualizar-pet':
                        include("pets/atualizar-pet.php");
                        break;
                    case 'inserir-pets':
                        include("pets/inserir-pets.php");
                        break;
                    case 'excluir-pet':
                        include("pets/excluir-pet.php");
                        break;

                    // Valor padrão (caso não haja uma opção correspondente)
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
