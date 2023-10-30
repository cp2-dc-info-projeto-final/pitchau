<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceusenha</title>
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
<form action="../php/processar_login.php" method="POST" class="form">
        <p class="title">Esqueceu Sua Senha</p>
        <p>Solicitação para Redefinição de Senha</p>
        <label>
            <input required="" placeholder="" type="email" name="email" class="input">
            <span>Email</span>
        </label>
    
        <button type="submit" class="submit">Enviar</button>
    </form>
</body>
</html>
