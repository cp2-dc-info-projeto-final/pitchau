<?php
    include_once "../consultas/flying_bubbles.php";
    $conn = connect($servername, $username, $password, $dbname);

    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Coletar dados do formulário
        $password_ = $_POST["senha"];
        $confirm_password = $_POST["confirm_password"];


        if($password_ == $confirm_password){
        $conn = connect($servername, $username, $password, $dbname);
        $user_id = $_SESSION["user_id"];  // variável de sessão para o ID do usuário
        $stmt = $conn->prepare("UPDATE usuario SET senha = ? WHERE id = ?");
            }
        
        // Verifique se a preparação da declaração foi bem-sucedida
        if ($stmt === false) {
            die('Erro na preparação da declaração: ' . htmlspecialchars($conn->error));
        }

        // Vincule os parâmetros
        $hashed_password = password_hash($password_, PASSWORD_DEFAULT);
        $stmt->bind_param("si", $hashed_password, $user_id);
        
        // Execute a declaração preparada
        if ($stmt->execute()) {
            header("Location: logout.php");
            exit;
        } else {
            echo "Erro ao alterar senha: " . $stmt->error;
        }

        // Feche a conexão com o banco de dados
        $stmt->close();
        $conn->close();
    }
?>
