<?php
  include_once "consultas/flying_bubbles.php";

  if (!isset( $_SESSION["user_id"])) { //Verifica se == Usuário
    header("Location: ../index.php"); // Redirecionar para a página index
  }

  if (!isset($_SESSION["user_id"]) && !isset($_SESSION["is_admin"])) { //Verifica se == Usuário Logado ou == Administrador
    echo "<input type='hidden' id='menulevel' value='1'/>"; //Torna em visitante
    $menulevel = 1;
  }
  if (isset($_SESSION["user_id"])) { //Verifica se == Usuário Logado
    if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]== 1 ) { //Verifica se == Administrador
      echo "<input type='hidden' id='menulevel' value='3'/>"; //Torna em administrador
      $menulevel = 3;
   }
  else echo "<input type='hidden' id='menulevel' value='2'/>"; //Torna em usuário
  $menulevel = 2;
  }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php"><img src="../img/PITCHAU.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu">
          <div id="menu"></div>
          <script>
            menulevel = document.getElementById("menulevel").value;
            var menu = '';
            if(menulevel == '1'){
              menu = '<li><a class="dropdown-item" href="../paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="../paginas/cadastro.php">Se Cadastrar</a></li>';
            }
            else if(menulevel == '2'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/carrinho.php">Carrinho</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            else if(menulevel == '3'){
              menu = '<li><a class="dropdown-item" href="../paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="../paginas/cadastro_produto.php">Criar Produto</a></li><li><a class="dropdown-item" href="../paginas/produtos_vendidos.php">Relação de vendas</a></li><li><a class="dropdown-item" href="../paginas/visualizacaoUser.php">Gerenciar Usuários</a></li><li><a class="dropdown-item" href="../php/logout.php">Logout</a></li>';
            }
            document.getElementById("menu").innerHTML = menu;
          </script>
          </ul>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<?php
// Configurações de conexão com o banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$bancoDados = 'Pitchau';

// Conecta ao banco de dados
$conn = new mysqli($host, $usuario, $senha, $bancoDados);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém a estrutura das tabelas do banco de dados
$result = $conn->query("SHOW TABLES");
$tables = array();

while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

// Gera o script SQL
$sqlScript = "";

foreach ($tables as $table) {
    $result = $conn->query("SHOW CREATE TABLE $table");
    $row = $result->fetch_row();
    $sqlScript .= $row[1] . ";\n\n";
}
echo $sqlScript;

// Fecha a conexão
$conn->close();

// Nome do arquivo SQL de saída (com caminho absoluto)
$nomeArquivoSQL = 'backup.sql';

// Escreve o script SQL no arquivo
file_put_contents($nomeArquivoSQL, $sqlScript);

echo "Backup do banco de dados criado com sucesso. Consulte o arquivo $nomeArquivoSQL.";
?>