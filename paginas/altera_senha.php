<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>AlterarSenha</title>
</head>
<body>
    <?php
        include_once "../consultas/flying_bubbles.php";

        if (($_SESSION["user_id"]) != isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado e == Administrador
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        }
    ?>
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
            <div id="menu"></div>
            <script>
              menulevel = document.getElementById("menulevel").value;
              var menu = '';
              if(menulevel == '1'){
                menu = '<li><a class="dropdown-item" href="paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="paginas/cadastro.php">Se Cadastrar</a></li>';
              }
              else if(menulevel == '2'){
                menu = '<li><a class="dropdown-item" href="carrinho.php">Carrinho</a></li><li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
              }
              else if(menulevel == '3'){
                menu = '<li><a class="dropdown-item" href="cadastro_produto.php">Cadastrar Produto</a></li><li><a class="dropdown-item" href="carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="produtos_comprados.php">Relação de Compras</a></li><li><a class="dropdown-item" href="PGtranforma_admim.php">Cadastrar Administradores</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
              }
              document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<form action="../php/processar_altera_senha.php" method="POST" class="form">

        <p class="title">Alterar Senha</p>
        <p>Solicitação para Redefinição de Senha</p>

        <label>
            <input required="" placeholder="" type="password" class="input" name="senha">
            <span>Senha</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="confirm_password">
            <span>Confirmar senha</span>
        </label>

        <button type="submit" class="submit">Enviar</button>
    </form>
</body>
</html>
