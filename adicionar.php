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
                    
                    <form action="inserir.php" method="POST" class="mt-4">
            
                        <div class="form-group">
                            <label for="">Nome Produto</label>
                            <input type="text" name="name" class="form-control" placeholder="Insira o nome do produto" required  autocomplete="off">
                        </div>
            
                        <div class="form-group">
                            <label for="">Quantidade</label>
                            <input type="number" name="qtde" class="form-control" placeholder="Insira a quantidade de produtos" required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="">Descrição do Produto</label>
                            <div class="form-group">
                                <textarea class="form-control" name="desc" rows="3" placeholder="Insira aqui a descrição do produto" required  autocomplete="off"></textarea>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label for="">Valor Unitário</label>
                            <input type="text" name="val" class="form-control" placeholder="Insira o valor do produto Ex.: 3.75 ou 12.75" required  autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="">Validade</label>
                            <input type="text" name="validade" id="validade" class="form-control" placeholder="Insira a validade  Ex.: ano-mes-dia => aaaa-mm-dd" required  autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="">Nome do Laboratório</label>
                            <input type="text" name="lab" id="" class="form-control" placeholder="Insira o nome do laboratório" required  autocomplete="off">
                        </div>
            
                        <div class="d-flex justify-content-end">
                            <a href="index.php" class="btn btn-primary mr-2">
                                <span><i class="fas fa-undo"></i></span>
                                Voltar
                            </a>
                            <button type="reset" class="btn btn-warning text-white mr-2">
                                <i class="fas fa-broom fa-lg"></i>
                                Limpar
                            </button>
                            
                            <button type="submit" class="btn btn-success" id="button">
                                <span><i class="fas fa-save fa-lg text-white mr-2"></i></i></span>
                                Salvar
                            </button>
                        </div><!--d-flex justify-content-end-->         
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