<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrinho de Compras</title>
</head>
<body>

    <div class="container">
        <h1>Produtos</h1>
        <?php include 'get_produtos.php'; ?>
        
        <!-- Adicione mais produtos conforme necessário -->

        <h1>Carrinho de Compras</h1>
        <div id="cart">
            <!-- Conteúdo do carrinho será exibido aqui -->
        </div>
        <div id="total">
            <p>Total: R$ <span id="total-amount">0.00</span></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>