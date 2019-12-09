<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Distribuidora Norden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../favicon.ico" />

    <!-- Estilos da página -->
    <link rel="stylesheet" type="text/css" href="../styles/login/util.css">
    <link rel="stylesheet" type="text/css" href="../styles/login/main.css">

    <!-- Scripts da página -->
    <script src="../scripts/jquery/jquery-3.2.1.min.js"></script>

    <?php include ('header.php'); ?>
</head>

<section class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/img_9.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Distribuidora Norden</h5>
                    <h6>O chopp nº 1 de toda a região sul do Brasil</h6>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="../images/imagem_3.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Conheça os mais vendidos</h5>
                    <h6></h6>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/imagem_7.jpg">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<div class="main-info">

    <div class="container-main">
        <div class="container mt-3 mb-4 ml-5">
            <div class="row" style="margin-right: -30px;margin-left: -85px;">
                <div class="col-sm-2">
                    <div class="callout callout-info b-t-1 b-r-1 b-b-1">
                        <small class="text-dark">Novos Clientes</small><br>
                        <strong class="h4">9,123</strong>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-2">
                    <div class="callout callout-danger b-t-1 b-r-1 b-b-1">
                        <small class="text-dark">Total de Clientes</small><br>
                        <strong class="h4">22,643</strong>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-2">
                    <div class="callout callout-warning b-t-1 b-r-1 b-b-1">
                        <small class="text-dark">Visualizações da Página</small><br>
                        <strong class="h4">78,623</strong>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-2">
                    <div class="callout callout-success b-t-1 b-r-1 b-b-1">
                        <small class="text-dark">Produtos Vendidos</small><br>
                        <strong class="h4">150,123 </strong>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-2">
                    <div class="callout b-t-1 b-r-1 b-b-1">
                        <small class="text-dark">Litros de Chopp Vendidos</small><br>
                        <strong class="h4 b">857,584L</strong>
                    </div>
                </div>
                <!--/.col-->
                <div class="col-sm-2">
                    <div class="callout callout-primary b-t-1 b-r-1 b-b-1">
                        <small class="text-dark">Satisfação dos Clientes</small><br>
                        <strong class="h4">95%</strong>
                    </div>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-main-->
    </div>
</div>

<script src="../scripts/login/popper/popper.js"></script>
<script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
<script src="../scripts/login/select/select2.min.js"></script>
<script src="../scripts/login/main.js"></script>
<script src="../scripts/produtos.js"></script>
</body>
<footer>
    <?php include ('footer.php'); ?>
</footer>

</html>