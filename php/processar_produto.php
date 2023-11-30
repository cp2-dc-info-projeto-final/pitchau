<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $id_produto = $_POST["id_produto"];
    
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password_ = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $usuario = $firstname." ".$lastname;
    
    if($password_ == $confirm_password){
    include_once "../consultas/flying_bubbles.php";
     $conn = connect($servername, $username, $password, $dbname);
    
    // Uso de prepared statement para evitar SQL injection
    $stmt = $conn->prepare("INSERT INTO Usuario (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $usuario, $email, password_hash($password_, PASSWORD_DEFAULT));

        if ($stmt->execute()) {
            header("Location: ../paginas/login.php");
            exit;}
    }else {
        echo "Erro ao registrar: " . $stmt->error;
    }

    // Fechar a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
?>
