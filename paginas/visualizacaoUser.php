<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listagem de Usuários</title>
<link rel="stylesheet" href="../css/registre.css?v=0.8">
</head>
<body>
<?php include_once "../consultas/flying_bubbles.php"; 
 if ($_SESSION['is_admin'] != 1) {
    echo "Acesso negado!";
    exit;}

?>
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
        $usuarios = getuser($servername, $username, $password, $dbname);
        if (!empty($usuarios)) {
          foreach ($usuarios as $usuario) {
            echo '<tr>';
            echo '<td>' . $usuario['id'] . '</td>';
            echo '<td>' . $usuario['email'] . '</td>';
            echo '<td>' . $usuario['nome'] . '</td>';
            echo '<td>' . ($usuario['isAdmin'] ? 'Sim' : 'Não') . '</td>';
            echo '<td>';
            echo '<button class="edit-button" onclick="editUser(' . $usuario['id'] . ')">Editar</button>';
            echo '<button class="delete-button" onclick="deleteUser(' . $usuario['id'] . ')">Excluir</button>';
            echo '<button class="delete-button" onclick="transformaAdmim(' . $usuario['id'] . ')">Tornar<br>adm</button>';
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
<form id="edit-form" method="post" action="../php/editar_usuario.php" style="display: none;">
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
</body>
</html>