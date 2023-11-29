<?php
    include_once "consultas/flying_bubbles.php";
    $conn = connect($servername, $username, $password, $dbname);

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletar dados do formulário
        $password_ = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Validar os dados (adicionar validações adicionais conforme necessário)

        // Inserir dados na tabela Usuario
        $sql = "ALTER TABLE Usuario (senha) VALUES ('$password_')";

        if ($conn->query($sql) === TRUE) {
            header("Location: logout.php");
            exit;
        } else {
            echo "Erro ao alterar senha: " . $conn->error;
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    }
?>
