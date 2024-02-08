<?php
include_once "../consultas/flying_bubbles.php";
session_start();
$conn = connect();
echo contarItensNoCarrinho($_SESSION['user_id']);
?>
