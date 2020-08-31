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
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#" data-toggle="tooltip" data-placement="bottom" title="">Farmácia Popular</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div><!--container-->
        </nav>
    </header>

    <div class="container mt-4">

        <div class="jumbotron">
            <h1 class="display-4 mb-4">Sistema de Cadastro de Produtos</h1>
            <p class="lead">
            Este é um sistema para controle de produtos farmacêuticos no estoque.
            </p>
            <hr class="my-4">
            <p>
                O usuário pode cadastrar produtos, listar, atualizar e remover produtos.
            </p>
            
            <div class="row mt-4">

                <div class="col-md-6">
                    <div class="card-deck">
                        <div class="card shadow p-3 mb-2 bg-white rounded">
                            <div class="card-body">
                                <h5 class="card-title">Adicionar Produtos</h5>
                                <p class="card-text">Opção para adicionar produtos no estoque</p>
                                <a href="adicionar.php" class="btn btn-primary shadow white">
                                    <i class="fas fa-calendar-plus mr-2"></i>
                                    Cadastrar Produtos
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--col-md-6-->

                <div class="col-md-6">
                    <div class="card-deck">
                        <div class="card shadow p-3 mb-2 bg-white rounded">
                            <div class="card-body">
                                <h5 class="card-title">Lista de Produtos</h5>
                                <p class="card-text">Visualizar, editar e excluir os produtos</p>
                                <a href="listar.php" class="btn btn-primary shadow white">
                                    <i class="fas fa-table mr-2"></i>
                                    Produtos
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!--col-md-6-->
            </div><!--row-->
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