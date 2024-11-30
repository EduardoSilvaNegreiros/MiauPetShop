<?php
// Conexão com o banco de dados
include("config.php");
$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die("Erro na conexão: " . mysqli_connect_error());

// Função para criar tabelas se elas não existirem
function criarTabelas($conexao)
{
    // SQL para criar a tabela tbfuncionarios
    $sqlFuncionarios = "CREATE TABLE IF NOT EXISTS tbfuncionarios (
        idFuncionario INT AUTO_INCREMENT PRIMARY KEY,
        nomeFuncionario VARCHAR(100) NOT NULL,
        cpfFuncionario VARCHAR(14) NOT NULL UNIQUE,
        emailFuncionario VARCHAR(150) NOT NULL,
        telefoneFuncionario VARCHAR(15) NOT NULL,
        cargoFuncionario VARCHAR(50) NOT NULL,
        dataContratacao DATE NOT NULL,
        salarioFuncionario DECIMAL(10, 2) NOT NULL,
        statusFuncionario ENUM('Ativo', 'Inativo') NOT NULL
    )";

    // SQL para criar a tabela tbclientes
    $sqlClientes = "CREATE TABLE IF NOT EXISTS tbclientes (
        idCliente INT AUTO_INCREMENT PRIMARY KEY,
        nomeCliente VARCHAR(100) NOT NULL,
        emailCliente VARCHAR(150),
        telefoneCliente VARCHAR(15) NOT NULL,
        enderecoCliente VARCHAR(255) NOT NULL,
        sexoCliente ENUM('Masculino', 'Feminino', 'Outro') NOT NULL,
        dataNascCliente DATE NOT NULL,
        cpfCliente VARCHAR(14) NOT NULL UNIQUE
    )";

    // SQL para criar a tabela tbpets
    $sqlPets = "CREATE TABLE IF NOT EXISTS tbpets (
        idPet INT AUTO_INCREMENT PRIMARY KEY,
        nomePet VARCHAR(100) NOT NULL,
        tipoPet VARCHAR(50) NOT NULL,
        racaPet VARCHAR(50),
        sexoPet ENUM('Masculino', 'Feminino', 'Outro') NOT NULL,
        idadePet INT NOT NULL,
        pesoPet DECIMAL(5, 2),
        idCliente INT NOT NULL,
        FOREIGN KEY (idCliente) REFERENCES tbclientes(idCliente) ON DELETE CASCADE ON UPDATE CASCADE
    )";

    // SQL para criar a tabela tbservicos
    $sqlServicos = "CREATE TABLE IF NOT EXISTS tbservicos (
        idServico INT AUTO_INCREMENT PRIMARY KEY,
        nomeServico VARCHAR(100) NOT NULL,
        descricaoServico TEXT,
        precoServico DECIMAL(10, 2) NOT NULL,
        duracaoServico INT NOT NULL
    )";

    // Executa os comandos SQL para criar as tabelas
    if (mysqli_query($conexao, $sqlFuncionarios)) {
        echo "Tabela tbfuncionarios criada com sucesso!<br>";
    } else {
        echo "Erro ao criar a t
        abela tbfuncionarios: " . mysqli_error($conexao) . "<br>";
    }

    if (mysqli_query($conexao, $sqlClientes)) {
        echo "Tabela tbclientes criada com sucesso!<br>";
    } else {
        echo "Erro ao criar a tabela tbclientes: " . mysqli_error($conexao) . "<br>";
    }

    if (mysqli_query($conexao, $sqlPets)) {
        echo "Tabela tbpets criada com sucesso!<br>";
    } else {
        echo "Erro ao criar a tabela tbpets: " . mysqli_error($conexao) . "<br>";
    }

    if (mysqli_query($conexao, $sqlServicos)) {
        echo "Tabela tbservicos criada com sucesso!<br>";
    } else {
        echo "Erro ao criar a tabela tbservicos: " . mysqli_error($conexao) . "<br>";
    }
}


// Chama a função para criar as tabelas
criarTabelas($conexao);

// Fecha a conexão
mysqli_close($conexao);
