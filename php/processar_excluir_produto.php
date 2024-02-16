<?php
include_once "consultas/flying_bubbles.php";
session_start();

$id_produto = $_GET["id_produto"];
$conn= connect();
$sql = $conn->prepare("DELETE * FROM Produto WHERE id = $id_produto");
$result= $sql->execute();
$sql->close();
$conn->close();
return $result;
?>