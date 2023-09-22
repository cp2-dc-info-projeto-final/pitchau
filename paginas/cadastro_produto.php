<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>Cadastro Produtos</title>
</head>
<body>
<form class="form" action="../php/processar_registro.php" method="post">
    <p class="title">Registrar</p>
    <p class="message">Registre os produtos abaixo</p>

        <label>
            <input required="" placeholder="" type="text" class="input" name="nome_produto">
            <span>Nome do Produto</span>
        </label>
        <label>
            <input required="" placeholder="" type="date" class= "input" name="dataCriacao">
            <span> </span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="descricao">
            <span>Descrição</span>
        </label>

        <label>
            <input required="" placeholder="" type="number" class="input" name="valor">
            <span>Valor</span>
        </label> 
             
    <button class="submit">Enviar</button>
    <p class="signin">Volte para <a href="index.php">Home</a> </p>
</form>
</body>
</html>
