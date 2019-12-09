<!DOCTYPE html>
<html lang="en">

<head>

	<title>Distribuidora Norden</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="../favicon.ico"/>	

	<!-- Estilos da página -->
	<link rel="stylesheet" type="text/css" href="../styles/login/util.css">
	<link rel="stylesheet" type="text/css" href="../styles/login/main.css">

	<!-- Scripts da página -->
	<script src="../scripts/jquery/jquery-3.2.1.min.js"></script>

	<?php include ('header.php'); ?>
	</head>

     <section class= "slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
				<div class="carousel-item active">
				<img class="d-block w-100" src="../images/img_9.jpg" >
					<div class="carousel-caption d-none d-md-block">
				<h5>Distribuidora Norden</h5>
				<h6>O chopp nº 1 de toda a região sul do Brasil</h6>
		 	</div>
		</div>

		<div class="carousel-item">
			<img class="d-block w-100" src="../images/imagem_3.jpg">
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



<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Algo aqui!</h3>
            <p class="lead mb-0">algo aqui será colocado em breve.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Algo aqui!</h3>
            <p class="lead mb-0">Algo aqui será colocado em breve.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Algo aqui!</h3>
            <p class="lead mb-0">Algo aqui será colocado em breve.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

	<div class="container mt-3 mb-3">
		<div class="progress mt-2 mb-2">
			<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="progress mt-2 mb-2">
			<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="progress mt-2 mb-2">
			<div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<div class="progress mt-2 mb-2">
			<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
	</div>

	<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  	Comprar
	</button>
		
	</div>

	<script src="../scripts/login/popper/popper.js"></script>
	<script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
	<script src="../scripts/login/select/select2.min.js"></script>
	<script src="../scripts/login/main.js"></script>
</body>

<footer>
	<?php include ('footer.php'); ?>
</footer>

</html>