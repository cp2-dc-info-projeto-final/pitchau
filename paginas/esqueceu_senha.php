<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsqueceuSenha</title>
    <link rel="stylesheet" href="../css/registre.css">
</head>
<body>
<script>
    function enviaEmail()
    {
        <?php
        include_once "../php/processa_envia_email_esqueceu_senha.php";
        $para = $email;
        $assunto = "Redefinição de senha";
        $mensagem = "Redefina sua senha clicando neste link:";
        envia_email($email, $assunto, $mensagem);
        ?>
    }        
</script>
<form action="../php/processa_esqueceu_senha.php" method="POST" class="form">
        <p class="title">Esqueceu Sua Senha</p>
        <p>Solicitação para Redefinição de Senha</p>
        <label>
            <input required="" placeholder="" type="email" name="$email" class="input">
            <span>Email</span>
        </label>
    
        <button type="submit" class="submit" onClick="enviaEmail()">Enviar</button>
    </form>
</body>
</html>
