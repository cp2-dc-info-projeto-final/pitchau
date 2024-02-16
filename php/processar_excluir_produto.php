<?php

include_once "../consultas/flying_bubbles.php";
session_start();
$id_produto = $_GET["id_produto"];
$apagar_produto= apagar_produto_por_id($id_produto);
header("Location: ../index.php");

?>