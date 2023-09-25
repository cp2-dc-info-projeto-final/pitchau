<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password_ = $_POST["password"];

    // Conectar ao banco de dados (substitua com suas credenciais)
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "pitchau";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verificar as credenciais no banco de dados
    $sql = "SELECT id, nome, email, senha FROM Usuario WHERE email = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $row = $result->fetch_assoc();
        if( $password_ == $row['senha']){
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["email"] = $email;
            $_SESSION["user_nome"] = $row["nome"];
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
            exit();

        }
        else {
            echo "Senha incorreta. <a href='login.html'>Tente novamente</a>";
        }
    } else {
        echo "Email não encontrado. <a href='login.html'>Tente novamente</a>";
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>
