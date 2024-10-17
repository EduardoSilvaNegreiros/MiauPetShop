<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Login - Pet Shop</title>
</head>

<body>

    <!-- Container principal -->
    <div class="container">

        <!-- Seção de imagem do logo -->
        <div class="form-image">
            <img src="assets/img/logo-miau-pet-1.svg" alt="imagemPetShop" />
        </div>

        <!-- Formulário de login -->
        <div class="form">
            <form action="./process/process_login.php" method="POST">

                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>

                <!-- Exibir mensagens de erro ou sucesso -->
                <?php
                session_start(); // Inicia a sessão

                // Exibir mensagens de erro
                if (isset($_SESSION['mensagem_erro'])) {
                    echo '<div class="alert alert-danger">' . $_SESSION['mensagem_erro'] . '</div>';
                    unset($_SESSION['mensagem_erro']); // Limpa a mensagem após exibi-la
                }

                // Exibir mensagens de sucesso
                if (isset($_SESSION['mensagem_sucesso'])) {
                    echo '<div class="alert alert-success">' . $_SESSION['mensagem_sucesso'] . '</div>';
                    unset($_SESSION['mensagem_sucesso']); // Limpa a mensagem após exibi-la
                }
                ?>

                <!-- Campos de e-mail e senha -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Seu e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required />
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" required />
                    </div>

                    <!-- Link para recuperação de senha -->
                    <div class="forgot-password">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>

                    <!-- Botão de login -->
                    <div class="login-button">
                        <button type="submit">Entrar</button>
                    </div>
                </div>
            </form>

            <!-- Link para página de cadastro -->
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