<?php
    include_once "consultas/flying_bubbles.php";

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Coletar dados do formulário
        $password_ = $_POST["senha"];
        $confirm_password = $_POST["confirm_senha"];
        if ($password_ == $confirm_password){
            // Validar os dados (adicionar validações adicionais conforme necessário)

        // Inserir dados na tabela Usuario
        $sql = "ALTER TABLE Usuario (senha) VALUES ('$password_')";

        if ($conn->query($sql) === TRUE) {
            header("Location: logout.php");
            exit;
        } else {
            header("Location: ../paginas/perfil.php");
        }

        // Fechar a conexão com o banco de dados
        $conn->close();
        }

        
    }
?>
