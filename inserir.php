<?php
    include_once "conexao.php";

    $nome = $_POST['name'];
    $quantidade = $_POST['qtde'];
    $descricao = $_POST['desc'];
    $valor = $_POST['val'];
    $validade = $_POST['validade'];
    $laboratorio = $_POST['lab'];
    
    $sql = "INSERT INTO tdprodutos SET nome = '$nome', quantidade = '$quantidade', descricao = '$descricao', valorUnitario = '$valor', validade = '$validade', laboratorio = '$laboratorio' ";
    $sql = $pdo->query($sql);

    header("Location: listar.php");
?>
