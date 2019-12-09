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

	<div class="container">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Seu Carrinho</span>
                <span class="badge badge-secondary badge-pill number-itens"></span>
            </h4>
            <ul class="list-group mb-3">
                <div id="itens-checkout"></div>
                <li class="list-group-item d-flex justify-content-between">
                    <div id="pricetotal-checkout"></div>
                </li>
            </ul>
        </div>

      <div class="row">
        <div class="col-md-10 order-md-1">
          <h3 class="mb-3">Endereço de Entrega</h3>
            <hr>
          <div class="row">
          <div class="col-md-5 mb-3">
                <label for="cc-name">Nome do Destinatário</label>
                <input type="text" class="form-control" id="name-receiver" placeholder="" required>
              </div>
          </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Endereço</label>
                <select class="custom-select d-block w-100" id="adress-select" required>
                </select>             
              </div>             
            </div>

		  	<a href="/E-Commerce_LP2/pages/myadress-add.php" class="btn btn-info btn-lg btn-block">SELECIONAR ENDEREÇO</a>

            <p>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Frete</label>
                <select class="custom-select d-block w-100" id="freight-select" required>
                <option value="">Standart</option>
                </select>             
              </div>             
            </div>

            <h3 class="mb-3">Pagamento</h3>
            <hr>
            <h4 class="mb-3">Cartão de Crédito</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome Completo</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nome e sobrenome exatamente como está no cartão</small>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Número do Cartão</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
              </div>
            </div>
            <div class="row">
             <div class="col-md-3 mb-3">
                <label for="cc-expiration">Mês de Expiração</label>
                <input type="number" id="month-expiration" class="form-control" placeholder="Mês" min="01" max="12">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Ano de Expiração</label>
                <input type="number" id="year-expiration"  class="form-control" placeholder="Ano" min="2010" max="2040">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="">
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">Parcelas</label>
                <input type="number" class="form-control"  id="cc-installs" placeholder="" min="01" max="12">
              </div>
            </div>
            <hr class="mb-4">
            <button id="finish" class="btn btn-success btn-lg btn-block">FINALIZAR COMPRA</button>
			  <div class="container-login-layout-btn p-t-20"> </div>
      </div>
    </div>
	</div>
	<script src="../scripts/login/popper/popper.js"></script>
	<script src="../scripts/login/bootstrap/bootstrap.min.js"></script>
	<script src="../scripts/login/select/select2.min.js"></script>
	<script src="../scripts/login/main.js"></script>
	<script src="../scripts/login/checkout.js"></script>
</body>
<footer>
  <?php include ('footer.php'); ?>
</footer>
</html>