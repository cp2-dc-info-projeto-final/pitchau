<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar dados do formulário
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password_ = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

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

    // Inserir dados na tabela Usuario
    $sql = "INSERT INTO Usuario (nome, email, senha) VALUES ('$firstname $lastname', '$email', '$password_')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
        exit;
    } else {
        echo "Erro ao registrar: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>
