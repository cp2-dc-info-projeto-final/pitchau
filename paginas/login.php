<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
<?php
        include_once "../consultas/flying_bubbles.php";

        if ($_SESSION["user_id"] != isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado e == Administrador
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        }

        if (!isset($_SESSION["user_id"]) || !isset($_SESSION["is_admin"])) { //Verifica se == Usuário Logado ou == Administrador
          echo "<input type='hidden' id='menulevel' value='1'/>";
        }
        if (isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado
          echo "<input type='hidden' id='menulevel' value='2'/>";
        };
        if (isset($_SESSION["is_admin"]) == true) { //Verifica se == Administrador
          echo "<input type='hidden' id='menulevel' value='3'/>";
        };
    ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pitchau</a>
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
            <div id="menu"></div>
            <script>
              menulevel = document.getElementById("menulevel").value;
              var menu = '';
              if(menulevel == '1'){
                menu = '<li><a class="dropdown-item" href="paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="paginas/cadastro.php">Se Cadastrar</a></li>';
              }
              else if(menulevel == '2'){
                menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="#">Logout</a></li>';
              }
              else if(menulevel == '3'){
                menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="paginas/cadastro_produto.php">Cadastrar Produto</a></li>';
              }
              document.getElementById("menu").innerHTML = menu;
            </script>
          </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <form action="../php/processar_login.php" method="POST" class="form">
            <p class="title">Login</p>
            <label>
                <input required="" placeholder="" type="email" name="email" class="input">
                <span>Email</span>
            </label>

            <label>
                <input required="" placeholder="" type="password" name="senha" class="input">
                <span>Senha</span>
            </label>
            <p class="signin"><a href="esqueceu_senha.php">Esqueceu sua senha?</a></p>

            <button type="submit" class="submit">Login</button>
            <p class="signin">Ainda não tem cadastro? <a href="cadastro.php">Cadatre-se</a></p>
        </form>
</body>
</html>
<!DOCTYPE html>
