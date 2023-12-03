<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/perfil.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>
</head>

<body>
<?php
        include_once "../consultas/flying_bubbles.php";
        if (!isset($_SESSION["user_id"]) && !isset($_SESSION["is_admin"])) {
          echo "<input type='hidden' id='menulevel' value='1'/>";
        }
        if (isset($_SESSION["user_id"])) {
          if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]== 1 ) {
            echo "<input type='hidden' id='menulevel' value='3'/>";
          } else {
            echo "<input type='hidden' id='menulevel' value='2'/>";
          }
        }
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php" id="gradPitchau"><img src="../img/PITCHAU.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="alterar_email.php">Alterar email</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="altera_senha.php">Trocar a Senha</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" id="delete-account">Apagar sua conta</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
          <ul class="dropdown-menu">
          <div id="menu"></div>
          <script>
            menulevel = document.getElementById("menulevel").value;
            var menu = '';
            if(menulevel == '1'){
              menu = '<li><a class="dropdown-item" href="login.php">Fazer Login</a></li><li><a class="dropdown-item" href="cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" href="categoria.php">Criar Categoria</a></li><li><a class="dropdown-item" href="cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="PGtransforma_admim.php">Cadastrar Administradores</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
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
    <div class= "divin">
    <section id="dados-conta">
      <div class=perfil>
        <div class=text>
          <h2>Dados da Conta</h2>
          <form>
            <div class=dados>
              <?php $perfil = perfil($servername, $username, $password, $dbname); ?>
              <label for="nome">
                <span>Seu nome:<?php echo $perfil['nome']; ?></span>
              </label>
            </div>
            <div class=dados>
              <label for="email">
                <span>Seu email:<?php echo $perfil['email']; ?></span>
              </label>
            </div>
          </form>
        </div>
      </div>
    </section>
    </div>
  </main>

  <div id="confirmation-modal" class="modal" style="display:none;">
      <div class="modal-content">
        <p>Tem certeza que deseja apagar sua conta?</p>
        <button id="confirm-delete">Sim</button>
        <button id="cancel-delete">Não</button>
      </div>
    </div>

    <script>
      // Agora o evento DOMContentLoaded garante que o script só será executado após o carregamento do DOM
      document.addEventListener('DOMContentLoaded', function () {
        var deleteAccount = document.getElementById('delete-account');
        var confirmModal = document.getElementById('confirmation-modal');
        var confirmDelete = document.getElementById('confirm-delete');
        var cancelDelete = document.getElementById('cancel-delete');

        // Evento para mostrar o modal de confirmação
        deleteAccount.addEventListener('click', function(event) {
          event.preventDefault();
          confirmModal.style.display = 'block';
        });

        // Evento para confirmar a exclusão da conta
        confirmDelete.addEventListener('click', function() {
          window.location.href = '../php/userDrop.php'; // Redireciona para o script de exclusão
        });

        // Evento para cancelar a exclusão da conta e esconder o modal
        cancelDelete.addEventListener('click', function() {
          confirmModal.style.display = 'none';
        });
      });
    </script>
</body>

</html>