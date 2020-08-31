<?php
    include_once "conexao.php";
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
        <div class="jumbotron mt-3">
            <h1 class="display-5 mb-4">Lista de produtos</h1>
          
            <table class="table table-light table-striped table-bordered text-center shadow white">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Validade</th>
                    <th scope="col">Laboratório</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
            
                <?php
                    $sql = "SELECT * FROM tdprodutos";
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
                <tr>
                    <td><?php echo $nome?></td>
                    <td><?php echo $quantidade?></td>
                    <td>
                        <div class='form-group'>
                            <textarea class='form-control' rows='3' style='width:260px;'>
                                <?php echo $descricao?>
                            </textarea>
                        </div>
                    </td>
                    <td><span>R$</span><?php echo $valor?></td>
                    <td><?php echo $validade?></td>
                    <td><?php echo $laboratorio?></td>
                    <td>
                        <div class="d-flex mt-5">                                                
                            <a href="editar.php?id=<?php echo $idProduto?>" class="btn btn-warning btn-sm text-white d-flex align-items-center shadow white" role="button">
                                <span><i class='fas fa-edit mr-2'></i></span>
                                Editar
                            </a>
                            

                            <a href="deletar.php?id=<?php echo $idProduto?>" class="btn btn-danger btn-sm text-white ml-2 d-flex align-items-center shadow white" role="button">
                                <span><i class='fas fa-trash-alt mr-2'></i></span>
                                Remover
                            </a>
                        </div>
                        
                    </td>
                    <?php } ?><!--Fechamento do 'foreach'-->
                <?php } ?><!--Fechamento do 'if'-->
                </tr>
            </table><!--table-->
  
            <div class="d-flex justify-content-end">
                <a href="index.php" class="btn btn-primary mt-2 shadow white">
                    <i class="fas fa-undo-alt"></i>
                    Voltar
                </a>
            </div><!--d-flex justify-content-end-->
        </div><!--jumbotron-->
  
        
          
      </div><!--container-->
    

    <!-- Footer -->
    <footer class="page-footer font-small bg-primary text-white pt-4">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            © 2020 Copyright CodeWebMaster Todos os Direitos Reservados
        </div><!-- Copyright -->

    </footer><!-- Footer -->
    

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script> 
    <script src="assets/js/jquery.mask.min.js"></script>
    <script src="assets/js/all.min.js"></script>  
    
</body>
</html>

