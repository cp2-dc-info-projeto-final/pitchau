<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>CodigoEmail</title>
</head>
<body>
    <?php
        include_once "consultas/flying_bubbles.php";

        if (($_SESSION["user_id"]) != isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado e == Administrador
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        }
    ?>
    
    
<h3><a href="../#" text-decoration:none>Pitchau</a></h3>
<form action="../php/processar_altera_senha.php" method="POST" class="form">

        <p class="title">Alterar Senha</p>
        <p>Solicitação para Redefinição de Senha</p><br>
        <p>Insira o código de alteração de senha</p>

        <label>
            <input required="" placeholder="" type="password" class="input" name="email_code" id="email_code">
            <span>Código</span>
        </label>

        <script>
            $compara_cod_email = document.getElementById("email_code").value;
            $recebe_cod_email = document.getElementById("cod_altera_senha").value;

            if $compara_cod_email != $recebe_cod_email{
                header("Location: index.php"); // Redirecionar para a página do painel após o login
            }
        </script>
        
<?php
    function nova_senha_criptografada(){
    function random_string($length) {
    $random_pin = random_bytes($length);
    $random_pin = base64_encode($random_pin);
    $random_pin = str_replace(["+", "/", "="], "", $random_pin);
    $random_pin = substr($random_pin, 0, $length);
    return $random_pin;
}
    $sql = "ALTER TABLE Usuario (senha) VALUES ('$random_pin')";

    
    // Uso de prepared statement para evitar SQL injection
    $stmt = $conn->prepare("INSERT INTO Usuario(senha) VALUES (?,)");
    $stmt->bind_param("sss", $usuario, $email, password_hash($random_pin, PASSWORD_DEFAULT));

    /*if ($stmt->execute()) {
        header("Location: ../paginas/login.php");
        exit;
    } else {
        echo "Erro ao registrar: " . $stmt->error;
    }*/

    // Fechar a conexão com o banco de dados
    $stmt->close();
    $conn->close();

    return $random_pin;
    };
?>


<!--tenho que: após confirmar o código, levar à página de troca de senha-->

header("Location: paginas/altera_senha.php"); // Redirecionar para a página do painel após o login
            }
        <button type="submit" class="submit">Enviar</button>
    </form>
</body>
</html>
