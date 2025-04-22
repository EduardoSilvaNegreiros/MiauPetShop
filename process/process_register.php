<?php
session_start();

include '../database/conexao.php';
include '../database/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Proteção contra CSRF
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $_SESSION['mensagem_erro'] = "Requisição inválida!";
        header("Location: ../register.php");
        exit();
    }

    // Limpa e valida os dados
    $primeiro_nome = trim($_POST['primeiroNome']);
    $sobrenome = trim($_POST['segundoNome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = trim($_POST['telefone']);
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $genero = $_POST['genero'];

    // Verifica campos obrigatórios
    if (empty($primeiro_nome) || empty($sobrenome) || empty($email) || empty($telefone) || empty($senha) || empty($confirmarSenha) || empty($genero)) {
        $_SESSION['mensagem_erro'] = "Preencha todos os campos!";
        header("Location: ../register.php");
        exit();
    }

    // Valida e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['mensagem_erro'] = "E-mail inválido!";
        header("Location: ../register.php");
        exit();
    }

    // Valida se as senhas são iguais
    if ($senha !== $confirmarSenha) {
        $_SESSION['mensagem_erro'] = "As senhas não coincidem!";
        header("Location: ../register.php");
        exit();
    }

    // Verifica se e-mail já existe
    $verifica_email = $conexao->prepare("SELECT id FROM tbusuarios WHERE email = ?");
    $verifica_email->bind_param("s", $email);
    $verifica_email->execute();
    $verifica_email->store_result();

    if ($verifica_email->num_rows > 0) {
        $_SESSION['mensagem_erro'] = "E-mail já cadastrado!";
        $verifica_email->close();
        header("Location: ../register.php");
        exit();
    }
    $verifica_email->close();

    // Criptografa a senha
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    // Insere no banco
    $sql = "INSERT INTO tbusuarios (primeiroNome, segundoNome, email, telefone, senha, genero) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssss", $primeiro_nome, $sobrenome, $email, $telefone, $senhaCriptografada, $genero);

    if ($stmt->execute()) {
        $_SESSION['mensagem_sucesso'] = "Cadastro realizado com sucesso!";
        header("Location: ../login.php");
        exit();
    } else {
        $_SESSION['mensagem_erro'] = "Erro ao cadastrar!";
        header("Location: ../register.php");
        exit();
    }

    $stmt->close();
    $conexao->close();
} else {
    $_SESSION['mensagem_erro'] = "Requisição inválida.";
    header("Location: ../register.php");
    exit();
}
