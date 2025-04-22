<?php
session_start(); // Inicia a sessão

// Validação do token CSRF
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    $_SESSION['mensagem_erro'] = "Falha na verificação de segurança (CSRF).";
    header("Location: ../login.php");
    exit();
}

// Inclui conexão ao banco de dados
include '../database/conexao.php';
include '../database/config.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitiza e valida o e-mail
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['mensagem_erro'] = "E-mail inválido!";
        header("Location: ../login.php");
        exit();
    }

    // Pega a senha (não sanitiza para não corromper os caracteres)
    $senha = $_POST['password'];

    // Verifica campos vazios
    if (empty($email) || empty($senha)) {
        $_SESSION['mensagem_erro'] = "E-mail e senha são obrigatórios!";
        header("Location: ../login.php");
        exit();
    }

    // Consulta segura com prepared statement
    $sql = "SELECT id, email, senha, primeiroNome FROM tbusuarios WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se encontrou o usuário
    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();

        // Verifica a senha
        if (password_verify($senha, $usuario['senha'])) {
            session_regenerate_id(true); // Segurança extra

            // Armazena na sessão
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_name'] = $usuario['primeiroNome'];

            $_SESSION['mensagem_sucesso'] = "Login realizado com sucesso!";
            header("Location: ../pages/index.php");
            exit();
        }
    }

    // Mensagem padrão para falha no login
    $_SESSION['mensagem_erro'] = "E-mail ou senha incorretos!";
    header("Location: ../login.php");
    exit();

    // Fecha a conexão
    $stmt->close();
    $conexao->close();
} else {
    $_SESSION['mensagem_erro'] = "Requisição inválida.";
    header("Location: ../login.php");
    exit();
}
