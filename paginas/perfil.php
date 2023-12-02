<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/registre.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        // Defina a variável de sessão para o modo escuro (isso pode ser ajustado conforme necessário)
        $_SESSION['modo_escuro'] = isset($_SESSION['modo_escuro']) ? $_SESSION['modo_escuro'] : false;

        // Lógica para alternar o modo escuro (pode ser baseado em preferências do usuário, configurações salvas, etc.)
        if (isset($_GET['modo_escuro']) && $_GET['modo_escuro'] == 'ativar') {
            $_SESSION['modo_escuro'] = true;
        } elseif (isset($_GET['modo_escuro']) && $_GET['modo_escuro'] == 'desativar') {
            $_SESSION['modo_escuro'] = false;
        }
      
      
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" id="gradPitchau"><img src="img/PITCHAU.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
          <ul class="dropdown-menu">
          <div id="menu"></div>
          <script>
            menulevel = document.getElementById("menulevel").value;
            var menu = '';
            if(menulevel == '1'){
              menu = '<li><a class="dropdown-item" href="login.php">Fazer Login</a></li><li><a class="dropdown-item" href="cadastro.php">Se Cadastrar</a></li><li><a class="dropdown-item" href="?modo_escuro=ativar">Ativar Modo Escuro</a></li><li><a class="dropdown-item" href="?modo_escuro=desativar">Desativar Modo Escuro</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="php/logout.php">Logout</a></li><li><a class="dropdown-item" href="?modo_escuro=ativar">Ativar Modo Escuro</a></li><li><a class="dropdown-item" href="?modo_escuro=desativar">Desativar Modo Escuro</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="cadastro_categoria.php">Criar Categoria</a></li><li><a class="dropdown-item" href="cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="PGtransforma_admim.php">Cadastrar Administradores</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li><li><a class="dropdown-item" href="?modo_escuro=ativar">Ativar Modo Escuro</a></li><li><a class="dropdown-item" href="?modo_escuro=desativar">Desativar Modo Escuro</a></li>';
            }
            
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
    </div>
  </div>
</nav>
    <main>
      <nav>
          <ul>
              <li><a href="alterar_email.php">Alterar email</a></li>
              <li><a href="altera_senha.php">Trocar a Senha</a></li>
              <li><a href="#" id="delete-account">Apagar sua conta</a></li>
              <!-- Modal de confirmação -->
              <div id="confirmation-modal" style="display:none;">
                <p>Tem certeza que deseja apagar sua conta?</p>
                <button id="confirm-delete">Sim</button>
                <button id="cancel-delete">Não</button>
              </div>
          </ul>

      <script>
        // Quando o link de deletar conta for clicado
        document.getElementById('delete-account').addEventListener('click', function(event) {
          event.preventDefault(); // Impede a navegação imediata
          document.getElementById('confirmation-modal').style.display = 'block'; // Mostra o modal
        });

        // Quando o botão de confirmar no modal for clicado
        document.getElementById('confirm-delete').addEventListener('click', function() {
          window.location.href = '../php/userDrop.php'; // Redireciona para o script de exclusão
        });

        // Quando o botão de cancelar no modal for clicado
        document.getElementById('cancel-delete').addEventListener('click', function() {
          document.getElementById('confirmation-modal').style.display = 'none'; // Esconde o modal
        });
      </script>
    </nav>
    <section id="dados-conta">
      <div class=perfil>
        <div class=text>
          <h2>Dados da Conta</h2>
          <form>
            <div class=dados>
              <?php $perfil = perfil($servername, $username, $password, $dbname); ?>
              <label for="nome">
                <span><?php echo $perfil['nome']; ?></span>
              </label>
            </div>
            <div class=dados>
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