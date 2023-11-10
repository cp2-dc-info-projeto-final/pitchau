<?php

include_once "../consultas/flying_bubbles.php";

$codigo_erro= processar_login($servername, $username, $password, $dbname);
if($codigo_erro== 1){
    echo "Senha incorreta. <a href='../paginas/login.php'>Tente novamente</a>";
}
elseif($codigo_erro== 2){
    echo "Email não encontrado. <a href='../paginas/login.php'>Tente novamente</a>";
}
?>