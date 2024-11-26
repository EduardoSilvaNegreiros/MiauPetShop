<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/register.css" />
    <title>Pet Shop</title>
</head>

<body>
    <!-- Container principal -->
    <div class="container">

        <!-- Imagem do logo -->
        <div class="form-image">
            <img src="assets/img/LOGOFINAL.jpg" alt="imagemPetShop" />
        </div>

        <!-- Formulário de cadastro -->
        <div class="form">
            <form action="process/process_register.php" method="POST">

                <!-- Cabeçalho com título e botões de navegação -->
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>

                    <!-- Botões para navegação -->
                    <div class="header-buttons">
                        <a href="index.html"><button type="button">Sobre</button></a>
                        <a href="login.php"><button type="button">Login</button></a>
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

                <!-- Grupo de inputs para cadastro -->
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
                        <input type="tel" name="telefone" id="telefone" placeholder="(xx) xxxx-xxxx" required />
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required />
                    </div>

                    <div class="input-box">
                        <label for="confirmarSenha">Confirme sua senha</label>
                        <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="Digite sua senha novamente"
                            required />
                    </div>

                    <!-- Grupo de inputs para gênero -->
                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero</h6>
                        </div>

                        <!-- Opções de gênero -->
                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" name="genero" id="feminino" value="Feminino" />
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

                        <!-- Botão para enviar o formulário -->
                        <div class="continue-button">
                            <button type="submit">Continuar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>