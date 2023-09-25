<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/perfil/perfil.css">
    <link rel="stylesheet" href="../css/card_produtos.css">
    <link rel="stylesheet" href="../css/card_progress.css">
</head>
<body>
  <div class="superior">
  <div class="coluna-perfil-divisor anterior">
  <div class="card_">
  <div class="header">My Skills</div>
  <div class="body">
    <div class="skill">
      <div class="skill-name">HTML</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 90%"></div>
      </div>
      <div class="skill-percent-number">90%</div>
    </div>
    <div class="skill">
      <div class="skill-name">CSS</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 90%"></div>
      </div>
      <div class="skill-percent-number">80%</div>
    </div>
    <div class="skill">
      <div class="skill-name">JavaScript</div>
      <div class="skill-level">
        <div class="skill-percent" style="width: 75%"></div>
      </div>
      <div class="skill-percent-number">75%</div>
    </div>
  </div>
</div>
<div class="like-dislike-container">
	<div class="tool-box">
		<button class="btn-close">×</button>
	</div>
	<p class="text-content">What did you think<br>of this post?</p>				
	<div class="icons-box">
		<div class="icons">
			<label class="btn-label" for="like-checkbox">
				<span class="like-text-content">123</span>
				<input class="input-box" id="like-checkbox" type="checkbox">
				<svg class="svgs" id="icon-like-solid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path></svg>
				<svg class="svgs" id="icon-like-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"></path></svg>
				<div class="fireworks">
					<div class="checked-like-fx"></div>
				</div>
			</label>
		</div>
		<div class="icons">
			<label class="btn-label" for="dislike-checkbox">
				<input class="input-box" id="dislike-checkbox" type="checkbox">
				<div class="fireworks">
					<div class="checked-dislike-fx"></div>
				</div>
				<svg class="svgs" id="icon-dislike-solid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z"></path></svg>
				<svg class="svgs" id="icon-dislike-regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M323.8 34.8c-38.2-10.9-78.1 11.2-89 49.4l-5.7 20c-3.7 13-10.4 25-19.5 35l-51.3 56.4c-8.9 9.8-8.2 25 1.6 33.9s25 8.2 33.9-1.6l51.3-56.4c14.1-15.5 24.4-34 30.1-54.1l5.7-20c3.6-12.7 16.9-20.1 29.7-16.5s20.1 16.9 16.5 29.7l-5.7 20c-5.7 19.9-14.7 38.7-26.6 55.5c-5.2 7.3-5.8 16.9-1.7 24.9s12.3 13 21.3 13L448 224c8.8 0 16 7.2 16 16c0 6.8-4.3 12.7-10.4 15c-7.4 2.8-13 9-14.9 16.7s.1 15.8 5.3 21.7c2.5 2.8 4 6.5 4 10.6c0 7.8-5.6 14.3-13 15.7c-8.2 1.6-15.1 7.3-18 15.1s-1.6 16.7 3.6 23.3c2.1 2.7 3.4 6.1 3.4 9.9c0 6.7-4.2 12.6-10.2 14.9c-11.5 4.5-17.7 16.9-14.4 28.8c.4 1.3 .6 2.8 .6 4.3c0 8.8-7.2 16-16 16H286.5c-12.6 0-25-3.7-35.5-10.7l-61.7-41.1c-11-7.4-25.9-4.4-33.3 6.7s-4.4 25.9 6.7 33.3l61.7 41.1c18.4 12.3 40 18.8 62.1 18.8H384c34.7 0 62.9-27.6 64-62c14.6-11.7 24-29.7 24-50c0-4.5-.5-8.8-1.3-13c15.4-11.7 25.3-30.2 25.3-51c0-6.5-1-12.8-2.8-18.7C504.8 273.7 512 257.7 512 240c0-35.3-28.6-64-64-64l-92.3 0c4.7-10.4 8.7-21.2 11.8-32.2l5.7-20c10.9-38.2-11.2-78.1-49.4-89zM32 192c-17.7 0-32 14.3-32 32V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V224c0-17.7-14.3-32-32-32H32z"></path></svg>
				<span class="dislike-text-content">4</span>
			</label>
		</div>
	</div>
</div>

  </div>
  <div class="coluna-perfil-divisor profile">
  <div class="container text-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="foto_profile">
        <img src="../img/slider.png" alt="" class="profile-img">
      </div>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
<?php
// Inicie a sessão (se ainda não estiver iniciada)
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pitchau";

// Verifique se o usuário está logado (verifique se o ID está definido na sessão)
if (!isset($_SESSION["user_id"])) {
    // Redirecione o usuário para a página de login ou exiba uma mensagem de erro
    echo "Você não está logado.";
    exit;
}

// Configurações do banco de dados (substitua com suas próprias credenciais)

// Conectar ao servidor de banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// ID do usuário atualmente logado (a partir da $_SESSION)
$user_id = $_SESSION["user_id"];

// Consulta SQL para contar a quantidade de produtos do usuário atual
$sql = "SELECT COUNT(*) as total_produtos FROM Produto WHERE id_vendedor = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recupere a quantidade de produtos
    $row = $result->fetch_assoc();
    $totalProdutos = $row["total_produtos"];
    
    // Exiba a quantidade de produtos
    
} 
// Fechando a conexão com o banco de dados
$conn->close();
?>


<div class="container text-center">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
      <div class="info-perfil">
        <h1>
          <?php echo $_SESSION["user_nome"]; ?>
        </h1>
        <h2>
        <?php echo $_SESSION["email"]; ?>
        </h2>
        <h2>
          quantidade de Produtos:
          <?php echo $totalProdutos ?>
        </h2>

      </div>
    </div>
    <div class="col">
      
    </div>
  </div>
  <?php
// Inicie a sessão (se ainda não estiver iniciada)

// Verifique se o usuário está logado


// Configurações do banco de dados (substitua com suas próprias credenciais)


// Conectar ao servidor de banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// ID do usuário atualmente logado
$user_id = $_SESSION["user_id"];

// Consulta SQL para buscar os produtos do cliente atual
$sql = "SELECT * FROM Produto WHERE id_vendedor = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="card_list">';
    
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<div class="card-img">';
        // Aqui você pode exibir a imagem do produto (se você tiver um campo para a imagem na tabela Produto)
        echo '</div>';
        echo '<div class="card-info">';
        echo '<p class="text-title">' . $row["nome"] . '</p>';
        echo '<p class="text-body">' . $row["descricao"] . '</p>';
        echo '</div>';
        echo '<div class="card-footer">';
        echo '<span class="text-title">$' . number_format($row["valor"], 2) . '</span>';
        echo '<div class="card-button">';
        echo '<svg class="svg-icon" viewBox="0 0 20 20">';
        echo '<path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>';
        echo '<path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>';
        echo '<path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>';
        echo '</svg>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    
    echo '</div>';
} else {
    echo "Nenhum produto encontrado para este cliente.";
}

// Fechando a conexão com o banco de dados
$conn->close();
?>

</div>

  </div>


  </div>
  
    
</body>
</html>