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
        <th>Senha</th>
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
            echo '<td>' . $usuario['senha'] . '</td>'; // Considere esconder ou mascarar a senha
            echo '<td>' . $usuario['nome'] . '</td>';
            echo '<td>' . ($usuario['isAdmin'] ? 'Sim' : 'Não') . '</td>';
            echo '<td>';
            echo '<button class="edit-button" onclick="editUser(' . $usuario['id'] . ')">Editar</button>';
            echo '<button class="delete-button" onclick="deleteUser(' . $usuario['id'] . ')">Excluir</button>';
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