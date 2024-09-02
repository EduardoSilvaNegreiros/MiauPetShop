<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewpo rt" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/login.css" />
  <title>Login - Pet Shop</title>
</head>

<body>

  <div class="container">

    <div class="form-image">
      <img src="assets/img/logo-miau-pet-1.svg" alt="imagemPetShop" />
    </div>

    <div class="form">
      <form action="POST">

        <div class="form-header">
          <div class="title">
            <h1>Login</h1>
          </div>
        </div>

        <div class="input-group">
          <!-- Para os inputs de login -->
          <div class="input-box">
            <label for="email">Seu e-mail</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Digite seu e-mail"
              required />
          </div>
          <div class="input-box">
            <label for="password">Senha</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Digite sua senha"
              required />
          </div>

          <div class="forgot-password">
            <a href="#">Esqueceu sua senha?</a>
          </div>

          <div class="login-button">
            <button type="submit">Entrar</button>
          </div>
        </div>
      </form>

      <!-- Mensagem para cadastro -->
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