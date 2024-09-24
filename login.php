<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Define a codificação de caracteres para UTF-8 -->
    <meta charset="UTF-8" />
    <!-- Viewport para dispositivos móveis, ajusta o layout -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Inclui o arquivo CSS externo para estilizar o formulário de login -->
    <link rel="stylesheet" href="assets/css/login.css" />
    <!-- Título da aba do navegador -->
    <title>Login - Pet Shop</title>
</head>

<body>

    <!-- Container principal da página -->
    <div class="container">

        <!-- Seção de imagem do logo -->
        <div class="form-image">
            <img src="assets/img/logo-miau-pet-1.svg" alt="imagemPetShop" />
        </div>

        <!-- Seção do formulário -->
        <div class="form">
            <!-- Definição do formulário com o método POST -->
            <form action="POST">

                <!-- Cabeçalho do formulário -->
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>

                <!-- Grupo de inputs para e-mail e senha -->
                <div class="input-group">
                    <!-- Input para o e-mail -->
                    <div class="input-box">
                        <label for="email">Seu e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required />
                    </div>

                    <!-- Input para a senha -->
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

            <!-- Mensagem com link para página de cadastro -->
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