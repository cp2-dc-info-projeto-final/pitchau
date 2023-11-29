<?php
    include_once "../consultas/flying_bubbles.php";
    $conn = connect($servername, $username, $password, $dbname);

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletar dados do formulário
        $email= $_POST["email"];
        $senha = $_POST["senha"];

        $alterar_email= alterar_email($servername, $username, $password, $dbname,$email, $senha);
        
    }
?>
