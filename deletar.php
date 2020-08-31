<?php

    include_once 'conexao.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tdprodutos WHERE idProduto = $id";

    $sql = $pdo->query($sql);

    header("Location: listar.php");
?>