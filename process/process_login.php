<?php
session_start(); // Inicia a sessão

// Inclui conexão ao banco de dados
include '../database/conexao.php';
include '../database/config.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // Verifica se os campos estão vazios
    if (empty($email) || empty($senha)) {
        $_SESSION['error_message'] = "E-mail e senha são obrigatórios!";
        header("Location: ../login.php");
        exit();
    }

    // Consulta o usuário pelo e-mail
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o e-mail existe
    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();

        // Verifica a senha
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['user_id'] = $usuario['id']; // Armazena o ID do usuário
            $_SESSION['user_name'] = $usuario['primeiroNome']; // Armazena o nome do usuário
            header("Location: ../pages/index.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Senha incorreta!";
            header("Location: ../login.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "E-mail incorreto!";
        header("Location: ../login.php");
        exit();
    }

    // Fecha a conexão
    $stmt->close();
    $conexao->close();
} else {
    echo "Método de requisição inválido.";
}
?>
