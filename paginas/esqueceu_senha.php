<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsqueceuSenha</title>
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
<h3><a href="../#" text-decoration:none>Pitchau</a></h3>
<form action="../php/processa_envia_email_esqueceu_senha.php" method="POST" class="form">
        <p class="title">Esqueceu Sua Senha</p>
        <p>Solicitação para Redefinição de Senha</p>
        <label>
            <input required="" placeholder="" type="email" name="email" class="input">
            <span>Email</span>
        </label>
        <p class="signin">Lembrei minha senha! <a href="login.php">Voltar</a></p>
        <button type="submit" class="submit">Enviar</button>
    </form>
</body>
</html>
