<?php
    //Verifica se == Usuário Logado
    if (!isset($_SESSION["user_id"]) && !isset($_SESSION["is_admin"])) { //Verifica se == Usuário Logado ou == Administrador
        header("Location: ../index.php");;
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email não encontrado</title>
<link rel="stylesheet" href="../css/erros.css">
</head>
<body>
<div class="background">
  <div class="report-box">
    <h2>"Erro ao alterar o e-mail:</h2>
    <form>
      <a href="../php/logout.php" class="report-button">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit Issue
      </a>
    </form>
  </div>
</div>
</body>
</html>