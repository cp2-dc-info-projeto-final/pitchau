<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listagem de Compras</title>
<link rel="stylesheet" href="../css/visualizacaoUser.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/registre.css?v=0.8">
</head>
<body>
<?php 
include_once "../consultas/flying_bubbles.php"; 
if ($_SESSION['is_admin'] != 1) {
    echo "Acesso negado!";
    exit;
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
            var menu = '';
            menu = '<li><a class="dropdown-item" href="perfil.php">Perfil</a></li><li><a class="dropdown-item" </li><li><a class="dropdown-item" href="cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="produtos_vendidos.php">Relação de vendas</a></li><li></li><li><a class="dropdown-item" href="visualizacaoUser.php">Visualização Usuários</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="divin">
  <div class="form" style="min-height:90vh;">
    <div class="title">
      Listagem de Compras
    </div>
    <table class="user-list">
      <tr>
        <th>ID</th>
        <th>Nome do Usuário</th>
        <th>Valor</th>
        <th>Horário da Compra</th>
        <th>Ações</th>
      </tr>
      <?php
        // Substitua "getCompra" pela função que retorna os dados da tabela Compra
        $compras = getCompra();
        
        if (!empty($compras)) {
          foreach ($compras as $compra) {
            echo '<td>' . $compra['id_compra'];
            echo '<td>' . getUserName($compra['usuario_id']); // Função que busca o nome do usuário
            echo '<td>' . $compra['valor'];
            echo '<td>' . $compra['dataehora'];
            echo '<td>';
            // Adicione aqui os botões de editar e excluir
            echo '</td>';
            echo '</tr>';
          }
        } else {
          echo '<tr><td colspan="5">Nenhuma compra encontrada.</td></tr>';
        }
      ?>
    </table>
  </div>
</div>
<?php
include('../php/footer.php');
?>


</body>
</html>
