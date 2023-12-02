<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listagem de Usuários</title>
<link rel="stylesheet" href="../css/registre.css">
</head>
<body>
<?php include_once "../consultas/flying_bubbles.php"; 
 // if ($_SESSION['is_admin'] != 'admin') {
    //echo "Acesso negado!";
    //exit;}

?>
<div class="divin">
  <div class="form">
    <div class="title">
      Listagem de Usuários
    </div>
    <div class="user-list">
    <?php
  $usuarios = getuser($servername, $username, $password, $dbname);
  if (!empty($usuarios)) {
    foreach ($usuarios as $usuario) {
      echo '<div class="user-item">';
      echo '<span>' . $usuario['nome'] . '</span>';
      echo '<button class="edit-button" onclick="editUser(' . $usuario['id'] . ')">Editar</button>';
      echo '<button class="delete-button" onclick="deleteUser(' . $usuario['id'] . ')">Excluir</button>';
      echo '</div>';
    }
  } else {
    echo "Nenhum usuário encontrado.";
  }
  ?>
      <div class="user-item">
        <span>Nome do Usuário 1</span>
        <button class="edit-button" onclick="editUser()">Editar</button>
        <button class="delete-button" onclick="deleteUser()">Excluir</button>
      </div>
      <div class="user-item">
        <span>Nome do Usuário 2</span>
        <button class="edit-button" onclick="editUser()">Editar</button>
        <button class="delete-button" onclick="deleteUser()">Excluir</button>
      </div>
      <!-- Adicione mais usuários conforme necessário -->
    </div>
  </div>
</div>
<script>
  function editUser() {
  // Lógica para editar o usuário, por exemplo, abrir um formulário de edição.
  alert('Editar usuário selecionado');
}

function deleteUser() {
  // Lógica para excluir o usuário, por exemplo, exibir um modal de confirmação.
  const confirmation = confirm('Tem certeza que deseja excluir este usuário?');
  if (confirmation) {
    // Executar a exclusão do usuário
    alert('Usuário excluído');
  } else {
    // Cancelar a exclusão
    alert('Exclusão cancelada');
  }
}
</script>
</body>
</html>