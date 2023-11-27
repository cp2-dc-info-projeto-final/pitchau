<?php

include_once "../consultas/flying_bubbles.php";

// Certifique-se de que a variável $email esteja definida
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

$codigo_erro = processar_login($servername, $username, $password, $dbname, $email, $senha);


if ($codigo_erro == 1) {
    header("Location: ../index.php");
} elseif ($codigo_erro == 2) {
    echo "Email não encontrado. <a href='../paginas/login.php'>Tente novamente</a>";
}
?>