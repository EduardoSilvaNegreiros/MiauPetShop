<?php
// Incluir arquivo de configuração e conexão ao banco de dados
include '../database/conexao.php';
include '../database/config.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber dados do formulário
    $primeiro_nome = $_POST['primeiroNome'];
    $sobrenome = $_POST['segundoNome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $genero = $_POST['genero'];

    // Verifica se a senha e a confirmação são iguais
    if ($senha !== $confirmarSenha) {
        echo "As senhas não coincidem!";
        exit;
    }

    // Criptografar a senha
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

    // SQL para inserir dados no banco de dados
    $sql = "INSERT INTO usuarios (primeiro_nome, sobrenome, email, telefone, senha, genero) VALUES (?, ?, ?, ?, ?, ?)";
    
    // Preparar e executar a consulta
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssss", $primeiro_nome, $sobrenome, $email, $telefone, $senhaCriptografada, $genero);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $conexao->close();
} else {
    echo "Método de requisição inválido.";
}
?>
