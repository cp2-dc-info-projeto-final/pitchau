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
        
        // Coletar dados do formulário
        $password_ = $_POST["senha"];
        $confirm_password = $_POST["confirm_senha"];
        if ($password_ == $confirm_password){
            // Validar os dados (adicionar validações adicionais conforme necessário)

        // Inserir dados na tabela Usuario
        $criptografia = password_hash($password_, PASSWORD_DEFAULT);
        $idSessao= $_SESSION["user_id"];
        $stmt = "UPDATE usuario SET senha = '$criptografia' WHERE id = '$idSessao' "; 
        mysqli_query($conn,$stmt);
        header("Location: ../php/logout.php");
        exit();
        } else {
<<<<<<< HEAD
            header("Location: ../paginas/perfil.php");
        }
=======
            header("Location: ../paginas/perfil.php");}
            echo "<br><br>";
            echo "<p align='center'>A alteração de senha não foi realizada.</p>";
            echo "<p align='center'><a href='../paginas/perfil.php'>Voltar para Perfil</a></p>";
        

        // Fechar a conexão com o banco de dados
>>>>>>> 39c4db6c6931573fc7c0b2df93c0f8a9a426acd0
$conn->close();
?>
