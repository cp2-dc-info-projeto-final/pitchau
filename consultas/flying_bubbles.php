<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pitchau";


function connect($servername, $username, $password, $dbname){
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    return $conn;
}

function carousel($servername, $username, $password, $dbname) {
    $conn = connect($servername, $username, $password, $dbname);
    // Consulta SQL para buscar todas as URLs de imagens da tabela "Slider"
    $sql = "SELECT url_img FROM slider";
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

function recuperar_produto_por_id($servername, $username, $password, $dbname, $id_produto){
    $conn= connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM Produto where id=$id_produto";
    $result = $conn->query($sql);
    $card_produto=null;
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $card_produto = $row;
        }
            
        //Fechando a conexão com o banco de dados
        $conn->close();
        //Retornanndo variavel para card de produto
        return $card_produto;
        
    }
}

function criar_carrinho($servername, $username, $password, $dbname, $min, $max, $cod_carrinho){
    $conn= connect($servername, $username, $password, $dbname);
    $min = 000000;
    $max = 999999;
    $cod_carrinho = rand($min, $max);
    $sql - "INSERT INTO Compra(id) VALUES($cod_carrinho)";

}

function add_produto_carrinho($servername, $username, $password, $dbname, $id_produto){
    $conn= connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM Produto where id=$id_produto";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $card_produto = $row;
        }
    }
}

function processar_login($servername, $username, $password, $dbname, $email, $senha){
    $conn = connect($servername, $username, $password, $dbname);

    $sql = "SELECT id, nome, email, senha, isAdmin FROM Usuario WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $row["nome"]; // Defina o nome de usuário aqui
            $_SESSION["is_admin"] = $row["isAdmin"];
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
            exit();
        } 
        else{
            return 1;
        }
        
    } 
 
    
    else {
        return 2;
    }
}

function perfil($servername, $username, $password, $dbname){

    // Verifica a conexão do usuario
if (isset($_SESSION["email"])) { 
    $email = $_SESSION["email"]; // Obtém o email do usuário da sessão

    // Use $emailUsuario para exibir informações do usuário ou realizar operações
    
} else {
    // Se o usuário não estiver logado, redirecione-o para a página de login
    header("Location: ../paginas/login.php");
    exit;
}
$conn = connect($servername, $username, $password, $dbname);
$sql = "SELECT nome, email FROM usuario WHERE email = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Erro na preparação da consulta: ' . $conn->error);
}
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $perfil = $result->fetch_assoc();
        $conn->close();
        return $perfil;
    } else {
        return array('nome' => 'Usuário não encontrado', 'email' => 'Email não encontrado');
}

}

function alterar_senha($servername, $username, $password, $dbname){

}

function alterar_email($servername, $username, $password, $dbname,$email, $senha){
    $conn= connect($servername,$username,$password,$dbname);
    $user_id= $_SESSION["user_id"]; //Variavel de sessão
    $sql= "SELECT email, senha FROM usuario WHERE id= '$user_id'";
    $result=$conn->query($sql);
    if($result->num_rows > 0 ){
        $row= $result->fetch_assoc();
        if(password_verify($senha, $row['senha'])){
            $stmt=$conn->prepare("UPDATE usuario SET email= ? WHERE id= ?");
            $stmt->bind_param("si",$email, $user_id );
            if ($stmt->execute()) {
                header("Location: ../php/logout.php");
            } else {
                echo "Erro ao alterar o e-mail: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Senha incorreta. A alteração de e-mail não foi realizada.";
        }      
    } else {
        echo "Usuário não encontrado.";
        $conn->close();
    }
}

function Apagar_conta($servername, $username, $password, $dbname){
    $conn= connect($servername,$username,$password,$dbname);
    $user_id= $_SESSION["user_id"]; //Variavel de sessão
    $stmt = $conn->prepare("DELETE FROM usuario WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $result= $stmt->execute();
    $stmt->close();
    $conn->close();
    return $result;
}

function getuser($servername, $username, $password, $dbname){
    $conn= connect($servername,$username,$password,$dbname);
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);
    $usuarios = [];
    // Verificar se há resultados
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }
    // Fechar a conexão
    $conn->close();

    return $usuarios;
}

function apagar_usuarios($servername, $username, $password, $dbname, $id){
    $conn= connect($servername,$username,$password,$dbname);
    $sql = $conn->prepare("DELETE FROM usuario WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir o usuário: " . $conn->error;
    }
    $sql->close();
}

function editName_usuarios($servername, $username, $password, $dbname, $id,$newName){
    $conn= connect($servername,$username,$password,$dbname);
    $sql = $conn->prepare("UPDATE usuario SET nome = ? WHERE id = ?");
    $sql->bind_param("si", $newName, $id);
    if ($sql->execute()) {
        echo "Nome do usuário atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o nome do usuário: " . $conn->error;
        }
    $sql->close();
    }

function transform_admin($servername, $username, $password, $dbname,$id){
    $conn= connect($servername,$username,$password,$dbname);
    $sql = $conn->prepare("UPDATE usuario set isAdmin = 1 WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        echo "Usuário se tornou um admin com sucesso!";
    } else {
        echo "Erro ao tornar o usuario admin o usuário: " . $conn->error;
    }
    $sql->close();

}
?>