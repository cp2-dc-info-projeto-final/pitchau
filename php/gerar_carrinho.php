<?php
include_once "../consultas/flying_bubbles.php";
session_start();


$produtos_no_carrinho = getProdutosNoCarrinhoPorCliente($_SESSION['user_id']);

    // Inicializar um array para armazenar a quantidade de cada produto
    $quantidades = array();

    // Calcular a quantidade de cada produto no carrinho
    foreach ($produtos_no_carrinho as $produto_carrinho) {
        $id_produto = $produto_carrinho['id_produto'];
        $quantidade = $produto_carrinho['quantidade'];

        if (!isset($quantidades[$id_produto])) {
            $quantidades[$id_produto] = 0;
        }

        $quantidades[$id_produto] += $quantidade;
    }

    // Exibir os produtos agrupados com suas quantidades
    foreach ($quantidades as $id_produto => $quantidade) {
        $produto = getProdutoPorId($id_produto);

        if ($produto) {
            // Seu código para exibir cada card aqui
            echo '<div class="card" style="height:350px; margin:auto;">';
            echo '<div class="card-img">';
            $imagem = 'img/img_produto/' . $produto['foto'];
            echo '<img src="' . $imagem . '" class="d-block w-100" alt="...">';
            echo '</div>';
            echo '<div class="card-info">';
            echo '<p class="text-title">' . $produto["nome"] . '</p>';
            echo '<p class="text-body">' . $produto["descricao"] . '</p>';
            echo '    <div class="custom-card__price">'. number_format($produto["valor"], 2) . '</div>';
            echo '</div>';

            echo '<div class="card-footer">';            
            echo '<div class="custom-card">';
            echo '    <div class="custom-card__price">'. number_format($produto["valor"]*$quantidade, 2) . '</div>';
            echo '    <div class="custom-card__counter">';
            echo '        <button class="custom-card__btn" onclick="removerDoCarrinho(' . $produto['id'] . '); maisproduto(); atualizarTotal(); atualizarNotificacaoCarrinho();">-</button>';
            echo '        <div class="custom-card__counter-score">' . $quantidade . '</div>';
            echo '        <button class="custom-card__btn custom-card__btn-plus" id="addcart_' . $produto['id'] . '_carrinho maisproduto" onclick="adicionarAoCarrinho(' . $produto['id'] . '); maisproduto(); atualizarTotal(); atualizarNotificacaoCarrinho();">+</button>';
            echo '    </div>';
            echo '</div>';
            

            
            
            // Adicione qualquer outro detalhe que desejar mostrar no card
            echo '</div>';

            echo '</div>';
        }
    }

    // Caso não haja nenhum produto no carrinho
    if (empty($quantidades)) {
        echo "Nenhum produto encontrado no carrinho.";
    }
    ?>