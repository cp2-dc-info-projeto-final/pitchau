<?php
// Conexão com o banco de dados (substitua pelas suas configurações)
echo "Entrou na página";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pitchau";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para gerar um nome único para a imagem
function generateUniqueFileName($originalName) {
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
    $uniqueName = uniqid() . "." . $extension;
    return $uniqueName;
}

// Processar o formulário quando for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $descricao = $_POST["desc"];
    $valor = $_POST["valor"];

    // Verificar se uma imagem foi enviada
    if ($_FILES["foto"]["error"] === 0) {
        $fotoNome = generateUniqueFileName($_FILES["foto"]["name"]);
        echo $fotoNome;
        $fotoCaminho = "../img/produtos_cadastrados/" . $fotoNome;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoCaminho);
    } else {
        echo "Erro de imagem!";
        // Lidar com erro de upload de imagem, se necessário
    }

    // Inserir os dados no banco de dados
    $id_user=$_SESSION["user_id"] = $row["id"];
    echo $id_user;
    $sql = "INSERT INTO Produto (nome, descricao, valor, foto, id_vendedor) VALUES ('$nome', '$descricao', $valor, '$fotoNome', $id_user)";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
