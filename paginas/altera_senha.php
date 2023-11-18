<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>AlterarSenha</title>
</head>
<body>
    <?php
        include_once "consultas/flying_bubbles.php";
        session_start();

        if (!isset( $_SESSION["id"]) || !isset( $_SESSION["is_admin"])) { //Verifica se == Usuário Logado e == Administrador
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        }
    ?>
<h3><a href="../#" text-decoration:none>Pitchau</a></h3>
<form action="../php/processar_altera_senha.php" method="POST" class="form">

        <p class="title">Alterar Senha</p>
        <p>Solicitação para Redefinição de Senha</p>

        <label>
            <input required="" placeholder="" type="password" class="input" name="password">
            <span>Senha</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="confirm_password">
            <span>Confirmar senha</span>
        </label>

        <button type="submit" class="submit">Enviar</button>
    </form>
</body>
</html>
