<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>Documento</title>
</head>
<body>
<h3><a href="../#" text-decoration:none>Pitchau</a></h3>
<form class="form" action="../php/processar_registro.php" method="post">
    <p class="title">Registrar</p>
    <p class="message">Registre-se agora e tenha acesso completo ao nosso aplicativo.</p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="firstname">
            <span>Nome</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="lastname">
            <span>Sobrenome</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Senha</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="confirm_password">
        <span>Confirmar senha</span>
    </label>
    <button class="submit">Enviar</button>
    <p class="signin">Já tem uma conta? <a href="login.php">Entrar</a> </p>
</form>
</body>
</html>
