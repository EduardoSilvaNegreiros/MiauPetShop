<?php
// Inicia a sessão
session_start();

// Verifica se a sessão existe, então destrói
if (isset($_SESSION['usuario'])) {
    // Destrói todas as variáveis de sessão
    session_unset();

    // Destrói a sessão
    session_destroy();
}

// Redireciona o usuário para a página de login ou sobre após o logout
header("Location: ../index.html");
exit;
?>