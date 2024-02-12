<?php
ob_start();

function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Criar conexão
    $conn = new mysqli($servername, $username, $password);
    $databaseName = "Pitchau";

    // Verificar a existência do banco de dados
    $query = "SHOW DATABASES LIKE '$databaseName'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $conn->close();
    } else {
        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }
    
        // Ler o conteúdo do arquivo SQL
        $sqlFile = file_get_contents('consultas/pitchau.sql');
    
        // Executar script SQL para criar banco de dados e tabelas
        if ($conn->multi_query($sqlFile)) {
            echo "Script SQL executado com sucesso!";
        } else {
            echo "Erro na execução do script SQL: " . $conn->error;
        }
    
        // Fechar a conexão temporária
        $conn->close();
    

    }

    // Verificar a conexão
    
    // Conectar ao banco de dados Pitchau após a criação
$conn = new mysqli($servername, $username, $password, 'Pitchau');



// Verificar se a tabela Categoria está vazia
$resultCategoria = $conn->query("SELECT COUNT(*) as count FROM Categoria");
$rowCategoria = $resultCategoria->fetch_assoc();

if ($rowCategoria['count'] == 0) {
    // Inserir dados na tabela Categoria
    $conn->query("INSERT INTO Categoria(nome) VALUES('Sopro')");
    $conn->query("INSERT INTO Categoria(nome) VALUES('Cordas')");
    $conn->query("INSERT INTO Categoria(nome) VALUES('Percussão')");
    $conn->query("INSERT INTO Categoria(nome) VALUES('Teclas')");
}

// Verificar se a tabela Produto está vazia
$resultProduto = $conn->query("SELECT COUNT(*) as count FROM Produto");
$rowProduto = $resultProduto->fetch_assoc();

if ($rowProduto['count'] == 0) {
    // Inserir dados na tabela Produto
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id) VALUES('Violão de aço', 'Violao com cordas de aço', '../../img/img_produto/imagem1.png', 1600, 1)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id) VALUES('Violão de Nylon', 'Violão com cordas de nylon', '../../img/img_produto/imagem2.png', 1400, 1)");
    $conn->query("INSERT INTO Produto(nome, descricao, foto, valor, categoria_id) VALUES('Guitarra EletroAcustica', 'Guitarra eletroacústica com cordas de aço', '../../img/img_produto/imagem3.png', 3800, 1)");
    // Adicione mais inserções de produtos conforme necessário
}

// Verificar se a tabela Slider está vazia
$resultSlider = $conn->query("SELECT COUNT(*) as count FROM Slider");
$rowSlider = $resultSlider->fetch_assoc();

if ($rowSlider['count'] == 0) {
    // Inserir dados na tabela Slider
    $conn->query("INSERT INTO Slider(url_img) VALUES('img/img_slider/slider.png')");
    $conn->query("INSERT INTO Slider(url_img) VALUES('img/img_slider/slider_2.png')");
}


    // Restante do seu código para verificar e inserir dados nas tabelas

    // Fechar a conexão
    

    return $conn;
}


function carousel() {
    $conn = connect();
    
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
    
    //Retornando variavel para carrossel
    return $imagens;
}

function card_produtos(){
    $conn= connect();
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

function recuperar_produto_por_id($id_produto){
    $conn= connect();
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

function criar_carrinho( $min, $max, $cod_carrinho){
    $conn= connect();
    $min = 000000;
    $max = 999999;
    $cod_carrinho = rand($min, $max);
    $sql = "INSERT INTO Compra(id) VALUES($cod_carrinho)";

}

function add_produto_carrinho( $id_produto){
    $conn= connect();
    $sql = "SELECT * FROM Produto where id=$id_produto";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $card_produto = $row;
        }
    }
}

function processar_login($email, $senha){
    $conn = connect();

    $sql = "SELECT id, nome, email, senha, isAdmin, foto FROM Usuario WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if ($senha == $row['senha']) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["foto_path"] = $row["foto"];
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $row["nome"]; // Defina o nome de usuário aqui
            $_SESSION["is_admin"] = $row["isAdmin"];
            header("Location: ../index.php"); // Redirecionar para a página do painel após o login
            
        } 
        else{
            return 1;
        }
        
    }elseif($result->num_rows ==0){

        header("Location: ../paginas/login.php");
    } 
 
    
    else {
        return 2;
    }
}

function perfil(){

    // Verifica a conexão do usuario
if (isset($_SESSION["email"])) { 
    $email = $_SESSION["email"]; // Obtém o email do usuário da sessão

    // Use $emailUsuario para exibir informações do usuário ou realizar operações
    
} else {
    // Se o usuário não estiver logado, redirecione-o para a página de login
    header("Location: ../paginas/login.php");
    exit;
}
$conn = connect();
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

function alterar_senha(){

}

function pegar_foto($user_id) {
    $conn = connect();

    // Utilizando prepared statement para evitar injeções SQL
    $stmt = $conn->prepare("SELECT foto FROM Usuario WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo $row["foto"];
    } else {
        // Usuário não encontrado
        return null;
    }
}


function alterar_email($email, $senha){
    $conn= connect();
    $user_id= $_SESSION["user_id"]; //Variavel de sessão
    $sql= "SELECT email, senha FROM Usuario WHERE id= '$user_id'";
    $result=$conn->query($sql);
    if($result->num_rows > 0 ){
        $row= $result->fetch_assoc();
        if($senha == $row['senha']){
            $stmt=$conn->prepare("UPDATE Usuario SET email= ? WHERE id= ?");
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

function Apagar_conta($id){
    $conn= connect();
    $user_id= $_SESSION["user_id"]; //Variavel de sessão
    $stmt = $conn->prepare("DELETE FROM Usuario WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $result= $stmt->execute();
    $stmt->close();
    $conn->close();
    return $result;
}

function getuser(){
    $conn= connect();
    $sql = "SELECT * FROM Usuario";
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

function apagar_usuarios($id){
    $conn= connect();
    $sql = $conn->prepare("DELETE FROM usuario WHERE id = ?");
    
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao excluir o usuário: " . $conn->error;
        return 1;
    }
    $sql->close();
}

function editName_usuarios( $id,$newName){
    $conn= connect();
    $sql = $conn->prepare("UPDATE usuario SET nome = ? WHERE id = ?");
    $sql->bind_param("si", $newName, $id);
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao atualizar o nome do usuário: " . $conn->error;
        return 1;
        }
    $sql->close();
    }

function transform_admin($id){
    $conn= connect();
    $sql = $conn->prepare("UPDATE usuario set isAdmin = 1 WHERE id = ?");
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        header("Location: ../paginas/visualizacaoUser.php");
    } else {
        echo "Erro ao tornar admin:" . $conn->error;
        return 1;
    }
    $sql->close();

}

function insertIntoCarrinho($id_produto, $quantidade) {
    $id_cliente= $_SESSION["user_id"];
    // Substitua 'sua_tabela' pelo nome real da tabela no seu banco de dados
    $conn = connect();
    
    // Prepara a consulta SQL usando placeholders para prevenção de SQL injection
    $sql = $conn->prepare("INSERT INTO carrinho (id_produto, id_cliente, quantidade) VALUES (?, ?, ?)");
    
    // Associa os parâmetros aos placeholders e define os tipos de dados
    $sql->bind_param("iii", $id_produto, $id_cliente, $quantidade);
    
    // Executa a consulta SQL
    if ($sql->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao inserir no carrinho: " . $sql->error;
        return 1;
    }
    
    // Fecha a declaração SQL e a conexão
    $sql->close();
    $conn->close();
}
function removeFromCarrinho($id_produto) {
    $id_cliente=$_SESSION['user_id'];
    // Substitua 'sua_tabela' pelo nome real da tabela no seu banco de dados
    $conn = connect();

    // Prepara a consulta SQL usando placeholders para prevenção de SQL injection
    $sql = $conn->prepare("DELETE FROM carrinho WHERE id_produto = ? AND id_cliente = ? LIMIT 1");

    // Associa os parâmetros aos placeholders e define os tipos de dados
    $sql->bind_param("ii", $id_produto, $id_cliente);

    // Executa a consulta SQL
    if ($sql->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro ao remover do carrinho: " . $sql->error;
        return 1;
    }

    // Fecha a declaração SQL e a conexão
    $sql->close();
    $conn->close();
}



function getProdutosNoCarrinhoPorCliente($id_cliente) {
    $conn = connect();

    // Substitua 'sua_tabela_carrinho' pelo nome real da tabela carrinho no seu banco de dados
    $sql = $conn->prepare("SELECT id_produto, quantidade FROM carrinho WHERE id_cliente = ?");
    $sql->bind_param("i", $id_cliente);

    $sql->execute();
    $result = $sql->get_result();

    // Obter todos os resultados como um array associativo
    $produtos_no_carrinho = $result->fetch_all(MYSQLI_ASSOC);

    $sql->close();
    $conn->close();

    return $produtos_no_carrinho;
}

function getProdutoPorId($id_produto) {
    $conn = connect();

    // Substitua 'sua_tabela_produto' pelo nome real da tabela Produto no seu banco de dados
    $sql = $conn->prepare("SELECT * FROM Produto WHERE id = ?");
    $sql->bind_param("i", $id_produto);

    $sql->execute();
    $result = $sql->get_result();

    // Obter o resultado como um array associativo
    $produto = $result->fetch_assoc();

    $sql->close();
    $conn->close();

    return $produto;
}







// flying_bubbles.php

if (isset($_GET['method'])) {
    $method = $_GET['method'];

    if ($method == 'atualizarTotal') {
        // Chame a função para calcular o total e retorne a resposta
        echo calcularTotalCarrinho();
    }
    // Outros métodos podem ser adicionados da mesma forma
}



if (isset($_GET['method']) && $_GET['method'] == 'insertIntoCarrinho') {
    // Verifique e sanitize os parâmetros necessários, e em seguida, chame a função desejada
    if (isset($_GET['id_produto'])) {
        $id_produto = $_GET['id_produto'];
        insertIntoCarrinho($id_produto, $_SESSION["user_id"], 1);
        // Pode adicionar lógica de resposta aqui, se necessário
    }
    // Outros métodos podem ser adicionados da mesma forma
}
if (isset($_GET['method']) && $_GET['method'] == 'removeFromCarrinho') {
    // Verifique e sanitize os parâmetros necessários, e em seguida, chame a função desejada
    if (isset($_GET['id_produto'])) {
        $id_produto = $_GET['id_produto'];
        removeFromCarrinho($id_produto);
        // Pode adicionar lógica de resposta aqui, se necessário
    }
    // Outros métodos podem ser adicionados da mesma forma
}

if (isset($_GET['action']) && $_GET['action'] == 'atualizar') {
    // Inclua a função contarItensNoCarrinho aqui (ou o código relevante para atualizar a consulta)
    

    // Exemplo: $id_cliente = obterIdDoCliente(); // Substitua com sua lógica para obter o ID do cliente
    $id_cliente = $_SESSION['user_id']; // Substitua pelo ID do cliente atual

    // Chama a função para contar a quantidade de itens no carrinho
    $quantidadeItens = contarItensNoCarrinho($id_cliente);

    // Retorna a quantidade como resposta AJAX
    echo $quantidadeItens;
} else {
    // Código adicional caso necessário
}



// Função para inserir na tabela Compra
function inserirCompra($valor) {
    // Inicie a sessão (se ainda não estiver iniciada)
    session_start();
    $conn = connect();

    // Verifique se o usuário está logado
    if (!isset($_SESSION['user_id'])) {
        die("Usuário não autenticado.");
    }

    // Obtém o ID do usuário da sessão
    $usuario_id = $_SESSION['user_id'];

    // Obtém a data e hora atual
    $dataehora = date('Y-m-d H:i:s');

    // Prepara a instrução SQL para inserção
    $sql = "INSERT INTO Compra (usuario_id, dataehora, valor) VALUES (?, ?, ?)";

    // Prepara a instrução SQL
    $stmt = $conn->prepare($sql);

    // Vincula os parâmetros
    $stmt->bind_param('iss', $usuario_id, $dataehora, $valor);

    // Executa a instrução SQL
    if ($stmt->execute()) {
        echo "Compra inserida com sucesso.";
    } else {
        echo "Erro ao inserir compra: " . $stmt->error;
    }

    // Fecha a instrução e a conexão
    $stmt->close();
    $conn->close();
}
function getCompra() {
    $conn = connect();
    $sql = "SELECT * FROM Compra";
    $result = $conn->query($sql);

    $compras = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $compras[] = $row;
        }
    }

    return $compras;
}

function getUserName($id_usuario) {
    $conn = connect();
    $sql = "SELECT nome FROM Usuario WHERE id = $id_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['nome'];
    } else {
        return "Usuário não encontrado";
    }
}


function getFotoPefil($id_usuario) {
    $conn = connect();
    $sql = "SELECT foto FROM Usuario WHERE id = $id_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['foto'];
    } else {
        return "Usuário não encontrado";
    }
}

function updateFotoPerfil($id_usuario, $nova_foto) {
    $conn = connect();

    // Verifica se o usuário existe antes de tentar atualizar
    $verifica_sql = "SELECT id FROM Usuario WHERE id = $id_usuario";
    $verifica_result = $conn->query($verifica_sql);

    if ($verifica_result->num_rows > 0) {
        // Atualiza o caminho da foto na base de dados
        $update_sql = "UPDATE Usuario SET foto = '$nova_foto' WHERE id = $id_usuario";
        $conn->query($update_sql);

        return "Foto de perfil atualizada com sucesso.";
    } else {
        return "Usuário não encontrado.";
    }
}




function contarItensNoCarrinho($id_cliente) {
    $conn=connect();

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL usando DISTINCT para contar IDs únicos no carrinho
    $sql = "SELECT COUNT(DISTINCT id_produto) AS quantidade FROM carrinho WHERE id_cliente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_cliente);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $quantidade = $row['quantidade'];
        return $quantidade;
    } else {
        return 0;
    }

    $stmt->close();
    $conn->close();
}



?>