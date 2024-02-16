<?php
include_once "../consultas/flying_bubbles.php";
session_start();
if ($_SESSION['is_admin'] != 1) {
    exit("Acesso negado!");
    if (!isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
        header("Location: ../index.php"); // Redirecionar para a página do painel após o login
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteUser= Apagar_conta($id);
    if($deleteUser == 1){
        header("Location: ../paginas/erro_excluirUsuario.php");
    }
} 
elseif (isset($_POST['action']) && $_POST['action'] == 'edit' && isset($_POST['id']) && isset($_POST['new_name'])) {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $edituser= editName_usuarios($id,$newName);
} 
elseif(isset($_POST['action']) && $_POST['action'] == 'adminuser' && isset($_POST['id'])){
        $id= $_POST['id'];
        $tornaradmin= transform_admin($id);
<<<<<<< HEAD

} elseif(isset($_POST['action']) && $_POST['action'] == 'user' && isset($_POST['id'])){
    $id= $_POST['id'];
    $tornaradmin= destransform_admin($id);
=======
>>>>>>> 95aadeacd144af221d5bde97b58a61d83aabc063
}
    
header("Location: ../paginas/visualizacaoUser.php"); // Redirecionar para a página do painel após o login

?>