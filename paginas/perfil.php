<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/perfil/perfil.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>
</head>
<body>
    <?php
        include_once "consultas/flying_bubbles.php";

        if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário Logado e == Administrador
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        }
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
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
              <li><a class="dropdown-item" href="cadastro_produto.php">Cadastrar Produto</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <main>
      <nav>
          <ul>
              <li><a href="produtos_comprados.php">Produtos Comprados</a></li>
              <li><a href="produtos_vendidos.php">Produtos à Venda</a></li>
              <li><a href="perfil.php">Dados da Conta</a></li>
              <li><a href="#">Logout</a></li>
          </ul>
      </nav>
        <section id="dados-conta">
            <h2>Dados da Conta</h2>
            <form>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" value="Seu Nome" disabled>
                <label for="email">Email:</label>
                <input type="email" id="email" value="seuemail@email.com" disabled>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" value="suaSenha" disabled>
            </form>
        </section>
    </main>
</body>
</html>
