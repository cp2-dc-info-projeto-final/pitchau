<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/perfil/perfil.css">
  <link rel="stylesheet" href="../css/registre.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>
</head>
<body>
    <?php
        include_once "../consultas/flying_bubbles.php";
        if (!isset($_SESSION["user_id"]) && !isset($_SESSION["is_admin"])) { //Verifica se == Usuário Logado ou == Administrador
          echo "<input type='hidden' id='menulevel' value='1'/>";
        }
        if (isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado
          if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]== 1 ) { //Verifica se == Administrador
            echo "<input type='hidden' id='menulevel' value='3'/>";
          }
        else echo "<input type='hidden' id='menulevel' value='2'/>";
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
                menu = '<li><a class="dropdown-item" href="cadastro_produto.php">Cadastrar Produto</a></li><li><a class="dropdown-item" href="carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="produtos_comprados.php">Relação de Compras</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
              }
              document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <main>
      <nav>
          <ul>
              <li><a href="altera_senha.php">Trocar a Senha</a></li>
          </ul>
      </nav>
        <section id="dados-conta">
          <div class= perfil>
            <div class= text>
              <h2>Dados da Conta</h2>
            <form>
              <div class= dados>
              <?php $perfil= perfil($servername, $username, $password, $dbname);?>
                <label for="nome">
                  <span><?php echo $perfil['nome']; ?></span>
                </label>
              </div>
              <div class= dados>
                <label for="email">
                  <span><?php echo $perfil['email']; ?></span>
                </label>
              </div>
            </form>
            </div>
            
            
          </div>

            </div>
        </section>
    </main>
</body>
</html>
