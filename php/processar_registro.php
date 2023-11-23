<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password_ = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $usuario= $firstname + $lastname;

    // Validar os dados (adicionar validações adicionais conforme necessário)

    // Conectar ao banco de dados (substitua com suas credenciais)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pitchau";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Uso de prepared statement para evitar SQL injection
    $stmt = $conn->prepare("INSERT INTO Usuario (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $usuario, $email, password_hash($password_, PASSWORD_DEFAULT));

    if ($stmt->execute()) {
        header("Location: ../paginas/login.php");
        exit;
    } else {
        echo "Erro ao registrar: " . $stmt->error;
    }

    // Fechar a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
?>
