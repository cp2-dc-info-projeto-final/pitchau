<?php
include_once "../consultas/flying_bubbles.php";
$conn = connect();
echo contarItensNoCarrinho($_SESSION['user_id']);
?>
