<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registre.css?v=0.9">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Pitchau</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
          <li><li><a class="dropdown-item" href="../cadastro.php">Se Cadastrar</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="position: relative; text-align: center; background: url('../img/background/login_wallpaper.jpg') center/cover no-repeat;" class= "divin">
<form action="../php/processar_login.php" method="POST" class="form" style="background-color: rgba(255, 255, 255, 0.7); padding: 30px; border-radius: 20px; position: relative; border: solid 2px blue; margin: auto;">
  <p class="title">Login</p>
  <label>
      <input required="" placeholder="Email" type="email" name="email" class="input">
      <span>Email</span>
  </label>

  <label>
      <input required="" placeholder="Senha" type="password" name="senha" class="input">
      <span>Senha</span>
  </label>
  <p class="signin"><a href="esqueceu_senha.php">Esqueceu sua senha?</a></p>

  <button type="submit" class="submit">Login</button>
  <p class="signin">Ainda não tem cadastro? <a href="../cadastro.php">Cadastre-se</a></p>
</form>
</div>
</body>
</html>
