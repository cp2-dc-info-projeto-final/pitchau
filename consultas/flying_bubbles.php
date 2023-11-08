<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pitchau";


function connect($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    return $conn;
}

function carousel($servername, $username, $password, $dbname) {
    $conn = connect($servername, $username, $password, $dbname);
    // Consulta SQL para buscar todas as URLs de imagens da tabela "Slider"
    $sql = "SELECT url_img FROM Slider";
    $result = $conn->query($sql);
    $imagens=[];
    if ($result->num_rows > 0) {    
        while ($row = $result->fetch_assoc()) 
            array_push($imagens, $row);
    }
    // Fechando a conexão com o banco de dados
    $conn->close();
    //Retornando variavel para carrossel
    return $imagens;
}

function card_produtos($servername, $username, $password, $dbname){
    $conn= connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM Produto";
    $result = $conn->query($sql);
    $card_produto= [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc())
            array_push($card_produto, $row);
        //Fechando a conexão com o banco de dados
        $conn->close();
        //Retornanndo variavel para card de produto
        return $card_produto;
        
}
}

function processar_login($servername, $username, $password, $dbname, $email, $password_) {
    $conn = connect($servername, $username, $password, $dbname);

    // Verificar as credenciais no banco de dados
    $email = mysqli_real_escape_string($conn, $email);  // Evitar injeção de SQL
    $sql = "SELECT id, nome, email, senha FROM Usuario WHERE email = '$email'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        $row = $result->fetch_assoc();
        if (password_verify($password_, $row['senha'])) { // Verificar senha de forma segura
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["email"] = $email;
            $_SESSION["user_nome"] = $row["nome"];
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
            exit();
        } else {
            echo "Senha incorreta. <a href='login.html'>Tente novamente</a>";
        }
    } else {
        echo "Email não encontrado. <a href='login.html'>Tente novamente</a>";
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>