<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
<form action="../php/processar_login.php" method="POST" class="form">
        <p class="title">Login</p>
        <label>
            <input required="" placeholder="" type="email" name="email" class="input">
            <span>Email</span>
        </label>

        <label>
            <input required="" placeholder="" type="password" name="password" class="input">
            <span>Senha</span>
        </label>
        <p class="signin"><a href="esqueceu_senha.php">Esqueceu sua senha?</a></p>

        <button type="submit" class="submit">Login</button>
        <p class="signin">Ainda não tem cadastro? <a href="cadastro.php">Cadatre-se</a></p>
    </form>
</body>
</html>
<!DOCTYPE html>
