<?php
    include_once "consultas/flying_bubbles.php";

    // Conectar ao banco de dados (substitua com suas credenciais)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pitchau";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletar dados do formulário
        $password_ = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Validar os dados (adicionar validações adicionais conforme necessário)

        // Inserir dados na tabela Usuario
        $sql = "INSERT INTO Usuario (senha) VALUES ('$password_')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Erro ao alterar senha: " . $conn->error;
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
    }
?>
