<?php
include_once "../consultas/flying_bubbles.php"; 
if ($_SESSION['is_admin'] != 1) {
    exit("Acesso negado!");
}

if (isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteUser= apagar_usuarios($servername, $username, $password, $dbname, $id);


} elseif (isset($_POST['action']) && $_POST['action'] == 'edit' && isset($_POST['id']) && isset($_POST['new_name'])) {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $edituser= editName_usuarios($servername, $username, $password, $dbname, $id,$newName);
} elseif()
    we


?>