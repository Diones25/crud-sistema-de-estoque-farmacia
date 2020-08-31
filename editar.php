<?php
    include_once "conexao.php";
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--CSS customizações-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Fontes-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!--FontAwsome-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <title>Crud - PHP</title>
</head>
<body>

    <div class="container">
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-5 text-center">Formulário de Cadastro</h1>
                    
                    <form action="atualizar.php" method="POST" class="mt-4">

                    <?php

                        $sql = "SELECT * FROM tdprodutos where idProduto = $id";
                        $sql = $pdo->query($sql);
                        
                        if($sql->rowCount() > 0){
                            foreach($sql->fetchAll() as $produto){
                                
                                $idProduto = $produto['idProduto'];
                                $nome = $produto["nome"];
                                $quantidade = $produto["quantidade"];
                                $descricao = $produto["descricao"];
                                $valor = $produto["valorUnitario"];
                                $validade = $produto["validade"];
                                $laboratorio = $produto["laboratorio"];

                    ?>
            
                        <div class="form-group">
                            <label for="">Nome Produto</label>
                            <input type="number" name="id" id="" class="form-control" value="<?php echo $id ?>" style="display: none;">
                            <input type="text" name="name" class="form-control" value="<?php echo $nome?>">
                        </div>
            
                        <div class="form-group">
                            <label for="">Quantidade</label>
                            <input type="number" name="qtde" class="form-control"  value="<?php echo $quantidade?>">
                        </div>

                        <div class="form-group">
                            <label for="">Descrição do Produto</label>
                            <div class="form-group">
                                <textarea class="form-control" name="desc" rows="3"  value="">
                                    <?php echo $descricao?>
                                </textarea>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="">Valor Unitário</label>
                            <input type="text" name="val" class="form-control"  value="<?php echo $valor?>">
                        </div>

                        <div class="form-group">
                            <label for="">Validade</label>
                            <input type="text" name="validade" id="validade" class="form-control" value="<?php echo $validade?>">
                        </div>

                        <div class="form-group">
                            <label for="">Nome do Laboratório</label>
                            <input type="text" name="lab" id="" class="form-control" value="<?php echo $laboratorio?>">
                        </div>
            
                        <div class="d-flex justify-content-end">
                            <a href="listar.php" class="btn btn-primary mr-2 shadow white">
                                <span><i class="fas fa-undo"></i></span>
                                Voltar
                            </a>
                
                            <button type="submit" class="btn btn-success shadow white" id="button">
                                <span><i class="fas fa-clipboard-list fa-lg mr-2 text-white"></i></span>
                                Atualizar
                            </button>
                        </div><!--d-flex justify-content-end-->  
                        <?php }?>
                    <?php }?>       
                    </form>
                </div><!--jumbotron-->
            </div><!--col-md-6-->
        </div><!--row-->
    </div><!--container-->

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script> 
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script>
        jQuery(function($){
            $("#validade").mask("0000-00-00");
        });
    </script> 
</body>
</html>

