<?php
    include_once "../consultas/flying_bubbles.php";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $conn= connect(); 
    session_start();

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
        $sql = $conn->prepare ("UPDATE Usuario SET senha = ? WHERE id =");
        $sql->bind_param("s", password_hash($password_, PASSWORD_DEFAULT));

        if ($sql->execute()) {
            header("Location: ../php/logout.php");
            exit;
        } else {
            header("Location: ../paginas/perfil.php");
            echo "<br><br>";
            echo "<p align='center'>A alteração de senha não foi realizada.</p>";
            echo "<p align='center'><a href='../paginas/perfil.php'>Voltar para Perfil</a></p>";
        }
        

        // Fechar a conexão com o banco de dados
        $conn->close();
        }
        else{
            header("Location: ../index.php");
        }

        
    }
?>
