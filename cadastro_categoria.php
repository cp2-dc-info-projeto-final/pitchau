<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias de Produtos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        include_once "consultas/flying_bubbles.php";
        session_start();

        if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
        }
    ?>
    <header>
        <h1>Cadastro de Categorias de Produtos</h1>
    </header>

    <section>
        <h2>Adicionar Categoria</h2>
        <form id="categoria-form">
            <label for="nome-categoria">Nome da Categoria:</label>
            <input type="text" id="nome-categoria" name="nome-categoria" required>

            <button type="submit">Adicionar Categoria</button>
        </form>
    </section>

    <section>
        <h2>Categorias Cadastradas</h2>
        <ul id="categorias-lista">
            <!-- As categorias cadastradas serão exibidas aqui -->
        </ul>
    </section>
</body>
</html>