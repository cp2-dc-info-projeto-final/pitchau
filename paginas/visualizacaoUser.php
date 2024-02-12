<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listagem de Usuários</title>
<link rel="stylesheet" href="../css/visualizacaoUser.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/registre.css?v=0.8">
</head>
<body>
<?php
  include_once "../consultas/flying_bubbles.php";
  session_start();

  if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: ../index.php"); // Redirecionar para a página index
  }
  if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: ../index.php"); // Redirecionar para a página do painel após o login
  }

  if (!isset($_SESSION["user_id"]) && !isset($_SESSION["is_admin"])) { //Verifica se == Usuário Logado ou == Administrador
    echo "<input type='hidden' id='menulevel' value='1'/>"; //Torna em visitante
    $menulevel = 1;
  }
  if (isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado
    if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]== 1 ) { //Verifica se == Administrador
      echo "<input type='hidden' id='menulevel' value='3'/>"; //Torna em administrador
      $menulevel = 3;
   }
  else echo "<input type='hidden' id='menulevel' value='2'/>"; //Torna em usuário
  $menulevel = 2;
  }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="../img/PITCHAU.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
              menu = '<li><a class="dropdown-item" href="../paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="../paginas/cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="../paginas/produtos_comprados.php">Prod Comprado</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="../paginas/produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<div class="divin">
  <div class="form">
    <div class="title">
      Listagem de Usuários
    </div>
    <table class="user-list">
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Nome</th>
        <th>Admin</th>
        <th>Ações</th>
      </tr>
      <?php
        $usuarios = getuser();
        if (!empty($usuarios)) {
          foreach ($usuarios as $usuario) {
            echo '<td>' . $usuario['id'];
            echo '<td>' . $usuario['email'];
            echo '<td>' . $usuario['nome'];
            echo '<td>' . ($usuario['isAdmin'] ? 'Sim' : 'Não');
            echo '<td>';
            echo '<button class="edit-button" onclick="editUser('.$usuario['id'] .')">Editar</button>';
            echo '<button class="delete-button" onclick="deleteUser('.$usuario['id'].')">Excluir</button>';
            echo '<button class="delete-button" onclick="transformaAdmim('.$usuario['id'].')">Tornar adm</button>';
            echo '</td>';
            echo '</tr>';
          }
        } else {
          echo '<tr><td colspan="6">Nenhum usuário encontrado.</td></tr>';
        }
        
      ?>
    </table>
  </div>
</div>
<form id="edit-form" method="post" action="../php/edita_usuario.php" style="display: none;">
  <input type="hidden" name="action" value="edit">
  <input type="hidden" name="id" id="edit-id">
  <input type="hidden" name="new_name" id="edit-new-name">
</form>

<form id="delete-form" method="post" action="../php/edita_usuario.php" style="display: none;">
  <input type="hidden" name="action" value="delete">
  <input type="hidden" name="id" id="delete-id">
</form>

<form id="transformAdmim-form" method="post" action="../php/edita_usuario.php" style="display: none;">
  <input type="hidden" name="action" value="adminuser">
  <input type="hidden" name="id" id="admin-id">
</form>

<script>
function editUser(userId) {
    var newName = prompt('Por favor, insira o novo nome do usuário:');
    if (newName) {
        document.getElementById('edit-id').value = userId;
        document.getElementById('edit-new-name').value = newName;
        document.getElementById('edit-form').submit();
    }
}

function deleteUser(userId) {
    if (confirm('Tem certeza que deseja excluir este usuário?')) {
        document.getElementById('delete-id').value = userId;
        document.getElementById('delete-form').submit();
    }
}
function transformaAdmim(userId) {
    if (confirm('Tem certeza que deseja transformar este usuário em administrador?')) {
        document.getElementById('admin-id').value = userId;
        document.getElementById('transformAdmim-form').submit();
    }
}
</script>

<?php
include('../php/footer.php');
?>

</body>
</html>