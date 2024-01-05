<?php
 include_once "../consultas/flying_bubbles.php";
$conn= connect($servername, $username, $password, $dbname);

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
    $pastaDestino = "../uploads/img/img_produto/"; // Caminho para a pasta desejada
        $fotoCaminho = $pastaDestino . $fotoNome;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoCaminho);
    } else {
        echo "Erro de imagem!";
        // Lidar com erro de upload de imagem, se necessário
    }

    // Inserir os dados no banco de dados
    $id_user=$_SESSION["user_id"];
    echo $id_user;
    $sql = "INSERT INTO Produto (nome, descricao, foto, valor) VALUES ('$nome', '$descricao', '$fotoNome', $valor)";

    if ($conn->query($sql) === TRUE) {
        header("Location:../index.php");
    } else {
        echo "Erro ao cadastrar o produto: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
