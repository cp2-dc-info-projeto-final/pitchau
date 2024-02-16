<?php
session_start();

    if (isset( $_SESSION["is_admin"]) || $_SESSION["is_admin"] == false) { //Verifica se == Administrador
    header("Location: index.php"); // Redirecionar para a página do painel após o login
  }

include_once "consultas/flying_bubbles.php";

$id_produto = $_GET["id_produto"];
$conn= connect();
$sql = $conn->prepare("DELETE FROM Produto WHERE id = $id_produto");
$result= $sql->execute();
$sql->close();
$conn->close();
return $result;
?>