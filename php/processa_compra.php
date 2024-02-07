<?php
// Inicie ou retome a sessão

error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once "../consultas/flying_bubbles.php";
$conn = connect();

// Obtém o ID do usuário da sessão
$usuario_id = $_SESSION['user_id'];

// Recupera os registros da tabela 'carrinho' para o usuário atual
$sql = "SELECT * FROM carrinho WHERE id_cliente = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $usuario_id);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se há registros no carrinho
if ($result->num_rows > 0) {
    // Inicializa a variável para armazenar o valor total
    $valorTotal = 0;

    // Loop através dos registros do carrinho
    while ($row = $result->fetch_assoc()) {
        // Obtém o valor do produto com base no id_produto
        $id_produto = $row['id_produto'];
        $quantidade = $row['quantidade'];

        // Consulta para obter o valor do produto
        $sqlProduto = "SELECT valor FROM Produto WHERE id = ?";
        $stmtProduto = $conn->prepare($sqlProduto);
        $stmtProduto->bind_param('i', $id_produto);
        $stmtProduto->execute();
        $resultProduto = $stmtProduto->get_result();

        // Verifica se há registros para o produto
        if ($resultProduto->num_rows > 0) {
            $rowProduto = $resultProduto->fetch_assoc();
            // Adiciona o valor do produto multiplicado pela quantidade ao valor total
            $valorTotal += $rowProduto['valor'] * $quantidade;
        }

        // Feche o statement do produto
        $stmtProduto->close();
    }

    // Insere os dados na tabela 'Compra'
    $dataehora = date('Y-m-d H:i:s');
    $sqlInsertCompra = "INSERT INTO Compra (usuario_id, dataehora, valor) VALUES (?, ?, ?)";
    $stmtInsertCompra = $conn->prepare($sqlInsertCompra);
    $stmtInsertCompra->bind_param('iss', $usuario_id, $dataehora, $valorTotal);

    if ($stmtInsertCompra->execute()) {
        // Limpa o carrinho após a compra
        $sqlLimparCarrinho = "DELETE FROM carrinho WHERE id_cliente = ?";
        $stmtLimparCarrinho = $conn->prepare($sqlLimparCarrinho);
        $stmtLimparCarrinho->bind_param('i', $usuario_id);
        $stmtLimparCarrinho->execute();

        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();
    }

    $stmtInsertCompra->close();
} else {
    header("Location: ../index.php");
    exit();
}

// Feche a conexão
$stmt->close();
$conn->close();
?>
