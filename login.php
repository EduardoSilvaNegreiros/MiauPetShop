<?php
session_start();

// Gera token CSRF se ainda não existir
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Login - Pet Shop</title>
</head>

<body>

    <div class="container">
        <div class="form-image">
            <img src="assets/img/LOGOFINAL.jpg" alt="imagemPetShop" />
        </div>

        <div class="form">
            <form action="./process/process_login.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>

                <?php
                // Exibir mensagens com escape pra evitar XSS
                if (isset($_SESSION['mensagem_erro'])) {
                    echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['mensagem_erro']) . '</div>';
                    unset($_SESSION['mensagem_erro']);
                }

                if (isset($_SESSION['mensagem_sucesso'])) {
                    echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['mensagem_sucesso']) . '</div>';
                    unset($_SESSION['mensagem_sucesso']);
                }
                ?>

                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Seu e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required />
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" required />
                    </div>

                    <!-- Token CSRF -->
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="login-button">
                        <button type="submit">Entrar</button>
                    </div>
                </div>
            </form>

            <div class="register-message">
                <p>
                    Não tem login?
                    <a href="register.php">Clique aqui para se cadastrar</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
