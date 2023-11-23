<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registre.css">
    <title>Documento</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pitchau</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
          </li>
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
                menu = '<li><a class="dropdown-item" href="paginas/login.php">Fazer Login</a></li><li><a class="dropdown-item" href="paginas/cadastro.php">Se Cadastrar</a></li>';
              }
              else if(menulevel == '2'){
                menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="#">Logout</a></li>';
              }
              else if(menulevel == '3'){
                menu = '<li><a class="dropdown-item" href="paginas/perfil.php">Perfil</a></li><li><a class="dropdown-item" href="paginas/cadastro_produto.php">Cadastrar Produto</a></li>';
              }
              document.getElementById("menu").innerHTML = menu;
            </script>
          </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<form class="form" action="../php/processar_registro.php" method="post">
    <p class="title">Registrar</p>
    <p class="message">Registre-se agora e tenha acesso completo ao nosso aplicativo.</p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="firstname">
            <span>Nome</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="lastname">
            <span>Sobrenome</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password">
        <span>Senha</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="confirm_password">
        <span>Confirmar senha</span>
    </label>
    <button class="submit">Enviar</button>
    <p class="signin">Já tem uma conta? <a href="login.php">Entrar</a> </p>
</form>
</body>
</html>
