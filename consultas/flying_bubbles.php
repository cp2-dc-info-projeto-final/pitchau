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
    return $imagens;
}

function card_produtos($servername, $username, $password, $dbname){
    $conn= connect($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM Produto";
    $result = $conn->query($sql);
    $card_produto= [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc())
            array_push($produtos, $row);
        $conn->close();
        return $card_produtos;
        
}
}
?>
