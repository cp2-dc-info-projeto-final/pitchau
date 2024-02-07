<?php
include_once "../consultas/flying_bubbles.php";
$conn = connect();

$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;


$sql = "SELECT * FROM Usuario WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if ($senha == $row['senha']) {
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["email"] = $email;
        $_SESSION["username"] = $row["nome"]; // Defina o nome de usuário aqui
        $_SESSION["is_admin"] = $row["isAdmin"];
        header("Location: ../index.php");
        exit(); // Redirecionar para a página do painel após o login
        
    } 
    else{
        header("Location: ../paginas/perfil.php");
    }
    
}elseif($result->num_rows ==0){

    header("Location: ../paginas/login.php");
} 


else {
    header("Location: ../paginas/erro_email_invalido.php");
}
