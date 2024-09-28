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
            <img src="assets/img/logo-miau-pet-1.svg" alt="imagemPetShop" />
        </div>

        <!-- Formulário de cadastro -->
        <div class="form">
            <form action="#" method="POST">

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

                <!-- Grupo de inputs para cadastro -->
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Digite seu primeiro nome"
                            required />
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" required />
                    </div>

                    <div class="input-box">
                        <label for="email">Seu e-mail</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required />
                    </div>

                    <div class="input-box">
                        <label for="cell">Celular</label>
                        <input type="tel" name="cell" id="cell" placeholder="(xx) xxxx-xxxx" required />
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" placeholder="Digite sua senha" required />
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua senha</label>
                        <input type="password" name="confirmPassword" id="confirmPassword"
                            placeholder="Digite sua senha novamente" required />
                    </div>

                    <!-- Grupo de inputs para gênero -->
                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Gênero</h6>
                        </div>

                        <!-- Opções de gênero -->
                        <div class="gender-group">
                            <div class="gender-input">
                                <input type="radio" name="gender" id="female" value="Feminino" />
                                <label for="female">Feminino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="gender" id="male" value="Masculino" />
                                <label for="male">Masculino</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="gender" id="others" value="Outros" />
                                <label for="others">Outros</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" name="gender" id="none" value="Prefiro não dizer" />
                                <label for="none">Prefiro não dizer</label>
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