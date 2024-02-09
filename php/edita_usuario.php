<?php
include_once "../consultas/flying_bubbles.php";
session_start();
if ($_SESSION['is_admin'] != 1) {
    exit("Acesso negado!");
}

if (isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteUser= apagar_usuarios($id);
    if($deleteUser == 1){
        header("Location: ../paginas/erro_excluirUsuario.php");
    }
} elseif (isset($_POST['action']) && $_POST['action'] == 'edit' && isset($_POST['id']) && isset($_POST['new_name'])) {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $edituser= editName_usuarios($id,$newName);

} elseif(isset($_POST['action']) && $_POST['action'] == 'adminuser' && isset($_POST['id'])){
        $id= $_POST['id'];
        $tornaradmin= transform_admin($id);

}
    


?>