<?php
session_start();

// Gera token CSRF se não existir
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/register.css" />
    <title>Pet Shop</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/img/LOGOFINAL.jpg" alt="imagemPetShop" />
        </div>

        <div class="form">
            <form action="process/process_register.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>

                    <div class="header-buttons">
                        <button type="button" onclick="location.href='index.html'">Sobre</button>
                        <button type="button" onclick="location.href='login.php'">Login</button>
                    </div>
                </div>

                <?php
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
                        <label for="primeiroNome">Primeiro Nome</label>
                        <input type="text" name="primeiroNome" id="primeiroNome" placeholder="Digite seu primeiro nome" required />
                    </div>

                    <div class="input-box">
                        <label for="segundoNome">Sobrenome</label>
                        <input type="text" name="segundoNome" id="segundoNome" placeholder="Digite seu sobrenome" required />
                    </div>

                    <div class="input-box">
                        <label for="email">Seu e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required />
                    </div>

                    <div class="input-box">
                        <label for="telefone">Telefone</label>
                        <input type="tel" name="telefone" id="telefone" placeholder="(xx) xxxx-xxxx"
                            pattern="\(\d{2}\)\s?\d{4,5}-\d{4}" required />
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required />
                    </div>

                    <div class="input-box">
                        <label for="confirmarSenha">Confirme sua senha</label>
                        <input type="password" name="confirmarSenha" id="confirmarSenha"
                            placeholder="Digite sua senha novamente" required />
                    </div>

                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero</h6>
                        </div>

                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" name="genero" id="feminino" value="Feminino" required />
                                <label for="feminino">Feminino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="genero" id="masculino" value="Masculino" />
                                <label for="masculino">Masculino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="genero" id="outros" value="Outros" />
                                <label for="outros">Outros</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="genero" id="naoDizer" value="Prefiro não dizer" />
                                <label for="naoDizer">Prefiro não dizer</label>
                            </div>
                        </div>
                    </div>

                    <!-- Token CSRF escondido -->
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="continue-button">
                        <button type="submit">Continuar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
